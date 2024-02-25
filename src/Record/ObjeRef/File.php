<?php
/**
 * php-gedcom.
 *
 * php-gedcom is a library for parsing, manipulating, importing and exporting
 * GEDCOM 5.5 files in PHP 5.3+.
 *
 * @author          Kristopher Wilson <kristopherwilson@gmail.com>
 * @copyright       Copyright (c) 2010-2013, Kristopher Wilson
 * @license         MIT
 *
 * @link            http://github.com/mrkrstphr/php-gedcom
 */

namespace Gedcom\Record\ObjeRef;

use Gedcom\Record\ObjeRef\File\Form;

/**
 * Class Refn.
 */
class File extends \Gedcom\Record
{
    /**
     * @var string multimedia_file_refn
     */
    protected $_file;

    /** @var Form $_form */
    protected $_form;
    protected $_titl;

    protected $_date;
}
