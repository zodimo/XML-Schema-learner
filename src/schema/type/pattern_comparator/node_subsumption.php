<?php
/**
 * Schema learning
 *
 * This file is part of XML-Schema-learner.
 *
 * XML-Schema-learner is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License as
 * published by the Free Software Foundation; version 3 of the
 * License.
 *
 * XML-Schema-learner is distributed in the hope that it will be
 * useful, but WITHOUT ANY WARRANTY; without even the implied warranty
 * of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with XML-Schema-learner; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA
 * 02110-1301 USA
 *
 * @package Core
 * @version $Revision: 1236 $
 * @license http://www.gnu.org/licenses/gpl-3.0.txt GPL
 */

/**
 * Pattern comparator
 *
 * Checks if one of the patterns subsumes the other pattern regarding the 
 * contained nodes.
 *
 * @package Core
 * @version $Revision: 1236 $
 * @license http://www.gnu.org/licenses/gpl-3.0.txt GPL
 */
class slSchemaTypeNodeSubsumingPatternComparator extends slSchemaTypeSubsumingPatternComparator
{
    /**
     * Check if type a subsumes type b
     *
     * Check if type a subsumes type b
     * 
     * @param slSchemaType $a 
     * @param slSchemaType $b 
     * @return bool
     */
    protected function subsumes( slSchemaType $a, slSchemaType $b )
    {
        if ( count( array_diff( $b->automaton->getNodes(), $a->automaton->getNodes() ) ) )
        {
            return false;
        }

        return true;
    }
}

