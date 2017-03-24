<?php
/**
 * Created by PhpStorm.
 * User: Frost Wong <frostwong@gmail.com>
 * Date: 12/9/16
 * Time: 4:34 PM
 */

namespace Spt;


/**
 * Class Table
 * Render a complete table.
 * @package Spt
 */
class Table
{
    /**
     * @var TableHeader
     */
    private $header;

    /**
     * @var TableBody
     */
    private $body;

    public function __construct($fields, $data)
    {
        $this->header = new TableHeader($fields);
        $this->body = new TableBody($data);
        $this->body .= '</table>';
    }

    /**
     * Output the complete table.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->header . $this->body;
    }
}