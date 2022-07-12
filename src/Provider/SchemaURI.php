<?php
/**
 * PHP Faker Location-, Relation-, Media-, Incident Object report types and schemaURIs
 *
 * This file is a part of FakerLocRelTypes
 *
 * @author    Kjell-Inge Gustafsson, kigkonsult <ical@kigkonsult.se>
 * @copyright 2022 Kjell-Inge Gustafsson, kigkonsult, All rights reserved
 * @link      https://kigkonsult.se
 * @license   Subject matter of licence is the software FakerLocRelTypes.
 *            The above author, copyright, link and this licence notices shall be
 *            included in all copies or substantial portions of the FakerLocRelTypes.
 *
 *            FakerLocRelTypes is free software: you can redistribute it and/or
 *            modify it under the terms of the GNU Lesser General Public License
 *            as published by the Free Software Foundation, either version 3 of
 *            the License, or (at your option) any later version.
 *
 *            FakerLocRelTypes is distributed in the hope that it will be useful,
 *            but WITHOUT ANY WARRANTY; without even the implied warranty of
 *            MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 *            GNU Lesser General Public License for more details.
 *
 *            You should have received a copy of the GNU Lesser General Public License
 *            along with FakerLocRelTypes. If not, see <https://www.gnu.org/licenses/>.
 */
namespace Kigkonsult\FakerLocRelTypes\Provider;

use Faker\Factory       as FakerFactory;
use Faker\Generator     as FakerGenerator;
use Faker\Provider\Base as FakerBase;

/**
 * Class SchemaURI
 *
 * A collection of schema URIs as found in https://en.wikipedia.org/wiki/List_of_URI_schemes
 */
class SchemaURI extends FakerBase
{
    /**
     * @return FakerGenerator
     */
    private static function getFaker() : FakerGenerator
    {
        static $faker = null;
        if( null === $faker ) {
            $faker = FakerFactory::create();
        }
        return $faker;
    }

    /**
     * A random selected cid URI with 'email' part
     *
     * Referencing individual parts of an SMTP/MIME message
     * RFC 2111 / RFC 2392
     * ex : CID:JQPUBLIC.part3.960129T083020.xyzMail@host3.com
     *
     * @return string
     */
    public function cidUri() : string
    {
        static $TMPL = 'cid:';
        return $TMPL . self::getFaker()->email();
    }

    /**
     * A random selected data URI with 128 hex-bytes 'payload'
     *
     * Inclusion of small data items inline
     * RFC 2397
     * ex : data:<mediatype>[;base64],<data>
     *
     * @return string
     */
    public function dataUri() : string
    {
        static $TMPL = 'data:%s;base64,%s';
        return sprintf(
            $TMPL,
            self::getFaker()->mimeType(),
            bin2hex( random_bytes(64 ))
        );
    }

    /**
     * A random selected dns URI
     *
     * Domain Name System
     * RFC 4501
     * ex : dns:[//<host>[:<port>]/]<dnsname>[?<dnsquery>]
     *
     * @param null|bool $extended
     * @return string
     */
    public function dnsUri( ? bool $extended = false ) : string
    {
        static $TMPL1 = 'dns:%s.%s?TYPE=CERT';
        static $TMPL2 = 'dns://%s/%s.%s.org?CLASS=%s;TYPE=%s';
        $faker = self::getFaker();
        return $extended
            ? sprintf(
                $TMPL2,
                $faker->ipv4(),
                $faker->word(),
                $faker->word(),
                $faker->randomElement( [ static::numberBetween( 1, 9 ), 'IN', 'CH' ] ),
                $faker->randomElement( [ static::numberBetween( 1, 9 ), 'A', 'NS', 'MD' ] )
            )
            : sprintf( $TMPL1, $faker->word(), $faker->domainName());
    }

    /**
     * A random selected fax URI
     *
     * Used for telefacsimile numbers
     * RFC 2806 / RFC 3966
     * ex : fax:<phonenumber>
     *
     * @return string
     */
    public function faxUri() : string
    {
        static $TMPL = 'fax:';
        return $TMPL . self::getFaker()->e164PhoneNumber();
    }

    /**
     * A random selected feed URI
     *
     * web feed subscription
     * https://en.wikipedia.org/wiki/Feed_URI_scheme
     * ex : feed:https://example.com/rss.xml
     *
     * @return string
     */
    public function feedUri() : string
    {
        static $TMPL = 'feed:%s/%s.%s.%s/rss.xml';
        $faker = self::getFaker();
        return sprintf(
            $TMPL,
            $faker->word(),
            $faker->word(),
            $faker->tld(),
            $faker->word()
        );
    }

    /**
     * A random selected ftp URI
     *
     * FTP resources
     * https://datatracker.ietf.org/doc/html/draft-yevstifeyev-ftp-uri-scheme
     * ex : ftp: "//" host [ ftp-path ]
     * ex : ftp: "//" [ user [ ":" pass ] "@" ] host [ ":" port ] [ ftp-path ]
     *
     * @param null|bool $extended
     * @return string
     */
    public function ftpUri( ? bool $extended = false ) : string
    {
        static $TMPL1 = 'ftp://%s.%s/%s';
        static $TMPL2 = 'ftp://%s:%s@%s,%s:21/%s';
        $faker = self::getFaker();
        return $extended
            ? sprintf( $TMPL2,
                $faker->userName(),
                $faker->password,
                $faker->word(),
                $faker->tld(),
                $faker->word()
            )
            : sprintf( $TMPL1, $faker->word(), $faker->tld(), $faker->word() );
    }

    /**
     * A random selected geo URI
     *
     * A Uniform Resource Identifier for Geographic Locations
     * RFC5870
     * ex : geo:<lat>,<lon>
     * ex : geo:<lat>,<lon>[,<alt>][;u=<uncertainty>]
     *
     * @param null|bool $extended
     * @return string
     */
    public function geoUri( ? bool $extended = false ) : string
    {
        static $TMPL1 = 'geo:%f,%f';
        static $TMPL2 = ',%s;crsp=wgs84;u=%d;foo=%s;bar=%s';
        $faker  = self::getFaker();
        $output = sprintf( $TMPL1, $faker->latitude(), $faker->longitude());
        return $extended
            ? $output . sprintf(
                $TMPL2,
                static::randomFloat(1, -100, 2000 ),
                static::numberBetween( 10, 90 ),
                $faker->word(),
                $faker->word()
            )
            : $output;
    }

    /**
     * A random selected http URI
     *
     * HTTP resources
     * RFC 7230
     * ex : generic syntax
     *
     * @param null|bool $extended
     * @return string
     */
    public function httpUri( ? bool $extended = false ) : string
    {
        return $this->httpHttpsUri( 'http', $extended );
    }

    /**
     * A random selected https URI
     *
     * HTTP connections secured using SSL/TLS
     * RFC 7230
     * ex : generic syntax
     *
     * @param null|bool $extended
     * @return string
     */
    public function httpsUri( ? bool $extended = false ) : string
    {
        return $this->httpHttpsUri( 'https', $extended );
    }

    /**
     * @param string $protocol
     * @return string
     */
    private function httpHttpsUri( string $protocol,  ? bool $extended = false  ) : string
    {
        static $TMPL1 = '%s://www.%s.%s/%s.html';
        static $TMPL2 = '%s://%s.%s.%s:%d/%s/%s?%s=%d&%s=%s';
        $faker  = self::getFaker();
        return $extended
            ? sprintf(
                $TMPL2,
                $protocol,
                $faker->word(),
                $faker->word(),
                $faker->tld(),
                static::numberBetween( 5000, 5999 ),
                $faker->word(),
                $faker->word(),
                $faker->word(),
                static::numberBetween( 1, 999 ),
                $faker->word(),
                $faker->word()
            )
            : sprintf(
                $TMPL1,
                $protocol,
                $faker->word(),
                $faker->tld(),
                $faker->word()
            );
    }

    /**
     * A random selected imap  URI
     *
     * Accessing e-mail resources through IMAP
     * RFC 2192 / RFC 5092
     * ex : imap://[<user>[;AUTH=<type>]@]imap.<host>[:<port>]/<command>
     *
     * @return string
     */
    public function imapUri() : string
    {
        static $TMPL = 'imap://%s@%s.%s/INBOX/;uid=%d';
        $faker = self::getFaker();
        return sprintf(
            $TMPL,
            $faker->userName(),
            $faker->word(),
            $faker->tld(),
            static::numberBetween( 10, 90 )
        );
    }

    /**
     * A random selected ldap URI
     *
     * LDAP directory request
     * RFC 2255 / RFC 4516
     * ex : ldap://[<host>][/<dn>]
     * ex : ldap://[<host>[:<port>]][/<dn> [?[<attributes>][?[<scope>][?[<filter>][?<extensions>]]]]]
     *
     * @param null|bool $extended
     * @param null|bool $ldaps
     * @return string
     */
    public function ldapUri( ? bool $extended = false, ? bool $ldaps = false ) : string
    {
        static $TMPL1 = '%s://ldap.%s.%s/o=%s,c=%s';
        static $TMPL2 = '%s://ldap.%s.%s:%d/o=%s,c=%s?%s(cn=%s %s)';
        $protocol = $ldaps ? 'ldaps' : 'ldap';
        $faker = self::getFaker();
        return $extended
            ? sprintf(
                $TMPL2,
                $protocol,
                $faker->word(),
                $faker->tld(),
                static::numberBetween( 6001, 6999 ),
                $faker->company(),
                $faker->countryCode(),
                'sub', // one of [ 'base', 'one', 'sub' ] ),
                $faker->firstName(),
                $faker->lastName()
            )
            : sprintf(
                $TMPL1,
                $protocol,
                $faker->word(),
                $faker->tld(),
                $faker->company(),
                $faker->countryCode()
            );
    }

    /**
     * A random selected ldaps URI
     *
     * LDAP directory request
     * Same as above but ldaps
     *
     * @param null|bool $extended
     * @return string
     */
    public function ldapsUri( ? bool $extended = false ) : string
    {
        return $this->ldapUri( $extended, true );
    }

    /**
     * A random selected mailto URI
     *
     * SMTP e-mail addresses and default content
     * RFC 6068
     * ex : mailto:<address>[?<header1>=<value1>[&<header2>=<value2>]]
     *
     * @param null|bool $extended
     * @return string
     */
    public function mailtoUri( ? bool $extended = false ) : string
    {
        static $TMPL1 = 'mailto:%s';
        static $TMPL2 = '?subject=%s&body=%s';
        $faker  = self::getFaker();
        $output = sprintf( $TMPL1, $faker->email());
        return $extended
            ? $output
            : $output . sprintf( $TMPL2, $faker->word( 3, true ), $faker->sentence());
    }

    /**
     * A random selected mid URI with 'messageid' part
     *
     * Referencing individual parts of an SMTP/MIME message
     * RFC 2111 / RFC 2392
     * ex : mid:<message-id>[/<content-id>]
     *
     * @return string
     */
    public function midUri() : string
    {
        static $TMPL = 'mid:%s/%s';
        $faker  = self::getFaker();
        return sprintf(
            $TMPL,
            $faker->unixTime() . static::numberBetween( 11111111, 99999999 ),
            $faker->unixTime() . static::numberBetween( 11111111, 99999999 )
        );
    }

    /**
     * A random selected news URI
     *
     * (Usenet) newsgroups and postings
     * RFC 1738 / RFC 5538
     * ex : "news:" [ server "/" ] ( article / newsgroups )
     *
     * @return string
     */
    public function newsUri() : string
    {
        return $this->newsNntpUri( 'news' );
    }

    /**
     * A random selected news URI
     *
     * (Usenet) newsgroups and postings
     * RFC 1738 / RFC 5538
     * ex : "news:" [ server "/" ] ( article / newsgroups )
     *
     * @return string
     */
    public function nntpUri() : string
    {
        return $this->newsNntpUri( 'nntp' );
    }

    /**
     * @return string
     */
    private function newsNntpUri( string $scheme ) : string
    {
        static $TMPL = '%s://%s.%s.%s:%d/%s.group.this/%d';
        $faker  = self::getFaker();
        return sprintf(
            $TMPL,
            $scheme,
            $faker->word(),
            $faker->word(),
            $faker->tld(),
            static::numberBetween( 8000, 8999 ),
            $faker->word(),
            static::numberBetween( 60000, 79999 )
        );
    }

    /**
     * A random selected payto URI
     *
     * Designate target for payments
     * RFC 8905
     * ex : payto://<authority>/<receiver>[?<options>]
     *
     * @param null|bool $extended
     * @return string
     */
    public function paytoUri( ? bool $extended = false ) : string
    {
        static $TMPL1 = 'payto://iban/%s?amount=%s:%d';
        static $TMPL2 = '&message=%s&receiver-name=%s&sender-name=%s&instruction=%s';
        $faker  = self::getFaker();
        $output = sprintf(
            $TMPL1,
            $faker->iban(),
            $faker->countryISOAlpha3(),
            static::numberBetween( 100, 200 )
        );
        return $extended
            ? $output . sprintf(
                $TMPL2,
                $faker->words( 4, true ),
                $faker->company(),
                $faker->company(),
                $faker->words( 4, true )
            )
            : $output;
    }

    /**
     * A random selected pop  URI
     *
     * Accessing mailbox through POP3
     * RFC 2384
     * ex : pop://[<user>[;AUTH=<auth>]@]<host>[:<port>]
     *
     * @return string
     */
    public function popUri() : string
    {
        static $TMPL = 'pop://%s;AUTH=*@%s.%s.%s:%d';
        $faker  = self::getFaker();
        return sprintf(
            $TMPL,
            $faker->userName(),
            $faker->word(),
            $faker->word(),
            $faker->tld(),
            static::numberBetween( 5000, 6999 )
        );
    }

    /**
     * A random selected rsync URI
     *
     * Accessing mailbox through POP3
     * https://en.wikipedia.org/wiki/Rsync
     * ex : rsync://<host>[:<port>]/<path>
     *
     * @return string
     */
    public function rsyncUri() : string
    {
        static $TMPL = 'rsync://%s.%s.%s:%d/%s';
        $faker = self::getFaker();
        return sprintf(
            $TMPL,
            $faker->word(),
            $faker->word(),
            $faker->tld(),
            static::numberBetween( 5000, 6999 ),
            $faker->word()
        );
    }

    /**
     * A random selected sftp URI
     *
     * SFTP file transfers
     * http://tools.ietf.org/html/draft-ietf-secsh-scp-sftp-ssh-uri
     * ex : sftp://[<user>[;fingerprint=<host-key fingerprint>]@]<host>[:<port>]/<path>/<file>
     *
     * @param null|bool $extended
     * @return string
     */
    public function sftpUri( ? bool $extended = false ) : string
    {
        static $TMPL1 = 'sftp://%s@%s/%s.%s/%s/%s.%s';
        static $TMPL2 = 'sftp://%s;fingerprint=ssh-dss-%s@%s.%s.%s:%d;type=%s';
        $faker = self::getFaker();
        return $extended
            ? sprintf(
                $TMPL2,
                $faker->userName(),
                self::getFingerprintHexString(),
                $faker->word(),
                $faker->word(),
                $faker->tld(),
                static::numberBetween( 2345, 3456 ),
                $faker->randomElement( [ 'i', 'a' ] )
            )
            : sprintf(
                $TMPL1,
                $faker->userName(),
                $faker->word(),
                $faker->word(),
                $faker->tld(),
                $faker->word(),
                $faker->word(),
                $faker->fileExtension()
            );
    }

    /**
     * A random selected snews URI
     *
     * (Usenet) newsgroups and postings
     * RFC 1738 / RFC 5538
     * ex : "snews:" [ server "/" ] ( article / newsgroups )
     *
     * @return string
     */
    public function snewsUri() : string
    {
        return $this->newsNntpUri( 'snews' );
    }

    /**
     * A random selected smb URI
     *
     * Accessing SMB/CIFS shares
     * https://datatracker.ietf.org/doc/html/draft-crhertel-smb-url
     * ex : smb://[<user>@]<host>[:<port>][/[<path>]][?<param1>=<value1>[;<param2>=<value2>]]
     * ex : smb://[[<domain>;]<username>[:<password>]@]<server>[:<port>][/[<share>[/[<path>]]][?[<param>=<value>[<param2>=<value2>[...]]]]][2]
     *
     * @param null|bool $extended
     * @return string
     */
    public function smbUri( ? bool $extended = false ) : string
    {
        static $TMPL1 = 'smb://%s@%s.%s.%s:%d/%s?%s=%s';
        static $TMPL2 = 'smb://%s.%s;%s:%s@%s.%s.%s:%d/%s/%s?%s=%s;%s=%s';
        $faker = self::getFaker();
        return $extended
            ? sprintf(
                $TMPL2,
                $faker->word(),
                $faker->tld(),
                $faker->userName(),
                $faker->password(),
                $faker->word(),
                $faker->word(),
                $faker->tld(),
                static::numberBetween( 2345, 3456 ),
                $faker->word(),
                $faker->word(),
                $faker->word(),
                $faker->word(),
                $faker->word(),
                $faker->word()
            )
            : sprintf(
                $TMPL1,
                $faker->userName(),
                $faker->word(),
                $faker->word(),
                $faker->tld(),
                static::numberBetween( 2345, 3456 ),
                $faker->word(),
                $faker->word(),
                $faker->word()
            );
    }

    /**
     * A random selected ssh URI
     *
     * ssh 	SSH connections (like telnet:)
     * http://tools.ietf.org/html/draft-ietf-secsh-scp-sftp-ssh-uri
     * ex : ssh://[<user>]@]<host>[:<port>]
     * ex : ssh://[<user>[;fingerprint=<host-key fingerprint>]@]<host>[:<port>]
     *
     * @param null|bool $extended
     * @return string
     */
    public function sshUri( ? bool $extended = false ) : string
    {
        static $TMPL1 = 'ssh://%s@%s.%s.%s:%d';
        static $TMPL2 = 'ssh://%s;fingerprint=ssh-dss-%s@%s.%s.%s:%d';
        $faker = self::getFaker();
        return $extended
            ? sprintf(
                $TMPL2,
                $faker->userName(),
                self::getFingerprintHexString(),
                $faker->word(),
                $faker->word(),
                $faker->tld(),
                static::numberBetween( 2345, 3456 )
            )
            : sprintf(
                $TMPL1,
                $faker->userName(),
                $faker->word(),
                $faker->word(),
                $faker->tld(),
                static::numberBetween( 2345, 3456 )
            );
    }

    /**
     * A random selected telnet URI
     *
     * Used with telnet
     * RFC 1738 / RFC 4248
     * ex : telnet://<user>:<password>@<host>[:<port>/]
     *
     * @param null|bool $extended
     * @return string
     */
    public function telnetUri( ? bool $extended = false ) : string
    {
        static $TMPL1 = 'telnet://%s.%s.%s/';
        static $TMPL2 = 'telnet://%s:%s@%s.%s.%s:%d/';
        $faker = self::getFaker();
        return $extended
            ? sprintf(
                $TMPL2,
                $faker->userName(),
                $faker->password,
                $faker->word(),
                $faker->word(),
                $faker->tld(),
                23
            )
            : sprintf( $TMPL1,
                $faker->word(),
                $faker->word(),
                $faker->tld()
            );
    }

    /**
     * A random selected tel URI
     *
     * Used for telephone numbers
     * RFC 5341 / RFC 3966 / RFC 2806
     * ex : tel:<phonenumber>
     *
     * @return string
     */
    public function telUri() : string
    {
        static $TMPL = 'tel:';
        return $TMPL . self::getFaker()->e164PhoneNumber();
    }

    /**
     * A random selected urn uuid URI
     *
     * urn uuid Uniform Resource Names
     * RFC 2141
     * ex : urn:<namespace>:<specificpart>
     *
     * @return string
     */
    public function urnUuidUri() : string
    {
        static $TMPL = 'urn:uuid:';
        return $TMPL . self::getFaker()->uuid();
    }

    /**
     * A random selected vnc URI
     *
     * Virtual Network Computing
     * RFC 7869
     * ex : vnc://[<host>[:<port>]][?<params>]
     *
     * @param null|bool $extended
     * @return string
     */
    public function vncUri( ? bool $extended = false ) : string
    {
        static $TMPL1 = 'vnc://%s.%s.%s::5900';
        static $TMPL2 = 'vnc://%s@%s.%s.%s:%d?ConnectionName=%s';
        $faker = self::getFaker();
        return $extended
            ? sprintf(
                $TMPL2,
                $faker->userName(),
                $faker->word(),
                $faker->word(),
                $faker->tld(),
                static::numberBetween( 5000, 5999 ),
                $faker->word()
            )
            : sprintf(
                $TMPL1,
                $faker->word(),
                $faker->word(),
                $faker->tld()
            );
    }

    /**
     * A random selected webcal URI
     *
     * Subscribing to calendars in iCalendar format
     * https://en.wikipedia.org/wiki/ICalendar
     * ex : webcal://example.com/calendar.ics
     *
     * @return string
     */
    public function webcalUri() : string
    {
        static $TMPL = 'webcal://%s.%s.%s/%s.ics';
        $faker = self::getFaker();
        return sprintf(
            $TMPL,
            $faker->word(),
            $faker->word(),
            $faker->tld(),
            $faker->word()
        );
    }

    /**
     * A random selected xmpp URI
     *
     * XMPP
     * RFC 5122
     * ex : xmpp:[<user>]@<host>[:<port>]/[<resource>][?<query>]
     *
     * @param null|bool $extended
     * @return string
     */
    public function xmppUri( ? bool $extended = false ) : string
    {
        static $TMPL1 = 'xmpp:%s@%s.%s.%s/%s';
        static $TMPL2 = 'xmpp:%s@%s.%s.%s:%d/%s?message';
        $faker = self::getFaker();
        return $extended
            ? sprintf(
                $TMPL2,
                $faker->userName(),
                $faker->word(),
                $faker->word(),
                $faker->tld(),
                static::numberBetween( 5000, 5999 ),
                $faker->word()
            )
            : sprintf(
                $TMPL1,
                $faker->userName(),
                $faker->word(),
                $faker->word(),
                $faker->tld(),
                $faker->word()
            );
    }

    /**
     * A random selected URI
     *
     * @return string
     */
    public function anyUri() : string
    {
        switch( array_rand( range( 0, 43 ))) {
            case 0 :
                return $this->cidUri();
            case 1 :
                return $this->dataUri();
            case 2 :
                return $this->dnsUri();
            case 3 :
                return $this->dnsUri( true );
            case 4 :
                return $this->faxUri();
            case 5 :
                return $this->feedUri();
            case 6 :
                return $this->ftpUri();
            case 7 :
                return $this->ftpUri( true );
            case 8 :
                return $this->geoUri();
            case 9 :
                return $this->geoUri( true );
            case 10 :
                return $this->httpUri();
            case 11 :
                return $this->httpUri( true );
            case 12 :
                return $this->httpsUri();
            case 13 :
                return $this->httpsUri( true );
            case 14 :
                return $this->imapUri();
            case 15 :
                return $this->ldapUri();
            case 16 :
                return $this->ldapUri( true );
            case 17 :
                return $this->ldapsUri();
            case 18 :
                return $this->ldapsUri( true );
            case 19 :
                return $this->mailtoUri();
            case 20 :
                return $this->mailtoUri( true );
            case 21 :
                return $this->midUri();
            case 22 :
                return $this->newsUri();
            case 23 :
                return $this->nntpUri();
            case 24 :
                return $this->paytoUri();
            case 25 :
                return $this->paytoUri( true );
            case 26 :
                return $this->popUri();
            case 27 :
                return $this->rsyncUri();
            case 28 :
                return $this->sftpUri();
            case 29 :
                return $this->sftpUri( true );
            case 30 :
                return $this->smbUri();
            case 31 :
                return $this->smbUri( true );
            case 32 :
                return $this->snewsUri();
            case 33 :
                return $this->sshUri();
            case 34 :
                return $this->sshUri( true );
            case 35 :
                return $this->telnetUri();
            case 36:
                return $this->telnetUri( true );
            case 37 :
                return $this->telUri();
            case 38 :
                return $this->vncUri();
            case 39 :
                return $this->vncUri( true );
            case 40 :
                return $this->webcalUri();
            case 41 :
                return $this->xmppUri();
            case 42 :
                return $this->xmppUri( true );
            case 43 :
            default :
                return $this->urnUuidUri();
        } // end switch
    }

    private static function getFingerprintHexString() : string
    {
        return implode( '-', str_split( bin2hex( random_bytes( 16 )), 2 ));
    }
}
