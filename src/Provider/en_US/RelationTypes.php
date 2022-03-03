<?php
/**
 * FakerLocRelTypes, rfc4589 Location and rfc8288 relation types generate using fakerphp/faker.
 *
 * This file is a part of FakerLocRelTypes.
 *
 * @author    Kjell-Inge Gustafsson, kigkonsult <ical@kigkonsult.se>
 * @copyright 2007-2022 Kjell-Inge Gustafsson, kigkonsult, All rights reserved
 * @link      https://kigkonsult.se
 * @license   Subject matter of licence is the software FakerLocRelTypes.
 *            The above author, copyright, link and licence notices shall be
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
namespace Kigkonsult\FakerLocRelTypes\Provider\en_US;

use Faker\Provider\Base as FakerBase;

class RelationTypes extends FakerBase
{
    /**
     * Link Relation Types as found in 'Link Relation Types', https://www.iana.org/assignments/link-relations/link-relations.xhtml
     *
     * Web Linking, https://www.rfc-editor.org/rfc/rfc8288.html
     * "...the relationships between resources on the Web ("links")
     *  and the type of those relationships ("link relation types")."
     *
     * For the relationTypes content
     *   Copyright (c) 2017 IETF Trust and the persons identified as the document authors.  All rights reserved.
     *   see 'Copyright Notice' in the top of https://www.rfc-editor.org/rfc/rfc8288.html
     *
     * @var string[]
     */
    protected static $relationTypes = [
        'about',
        'alternate',
        'amphtml',
        'appendix',
        'apple-touch-icon',
        'apple-touch-startup-image',
        'archives',
        'author',
        'blocked-by',
        'bookmark',
        'canonical',
        'chapter',
        'cite-as',
        'collection',
        'contents',
        'convertedFrom',
        'copyright',
        'create-form',
        'current',
        'describedby',
        'describes',
        'disclosure',
        'dns-prefetch',
        'duplicate',
        'edit',
        'edit-form',
        'edit-media',
        'enclosure',
        'external',
        'first',
        'glossary',
        'help',
        'hosts',
        'hub',
        'icon',
        'index',
        'intervalAfter',
        'intervalBefore',
        'intervalContains',
        'intervalDisjoint',
        'intervalDuring',
        'intervalEquals',
        'intervalFinishedBy',
        'intervalFinishes',
        'intervalIn',
        'intervalMeets',
        'intervalMetBy',
        'intervalOverlappedBy',
        'intervalOverlaps',
        'intervalStartedBy',
        'intervalStarts',
        'item',
        'last',
        'latest-version',
        'license',
        'lrdd',
        'manifest',
        'mask-icon',
        'media-feed',
        'memento',
        'micropub',
        'modulepreload',
        'monitor',
        'monitor-group',
        'next',
        'next-archive',
        'nofollow',
        'noopener',
        'noreferrer',
        'opener',
        'openid2.local_id',
        'openid2.provider',
        'original',
        'P3Pv1',
        'payment',
        'pingback',
        'preconnect',
        'predecessor-version',
        'prefetch',
        'preload',
        'prerender',
        'prev',
        'preview',
        'previous',
        'prev-archive',
        'privacy-policy',
        'profile',
        'publication',
        'related',
        'restconf',
        'replies',
        'ruleinput',
        'search',
        'section',
        'self',
        'service',
        'service-desc',
        'service-doc',
        'service-meta',
        'sponsored',
        'start',
        'status',
        'stylesheet',
        'subsection',
        'successor-version',
        'sunset',
        'tag',
        'terms-of-service',
        'timegate',
        'timemap',
        'type',
        'ugc',
        'up',
        'version-history',
        'via',
        'webmention',
        'working-copy',
        'working-copy-of'
    ];

    /**
     * A random relation type.
     *
     * @return string
     */
    public function relationType() : string
    {
        return static::randomElement( static::$relationTypes );
    }
}
