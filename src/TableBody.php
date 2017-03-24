<?php
/**
 * Created by PhpStorm.
 * User: Frost Wong <frostwong@gmail.com>
 * Date: 12/9/16
 * Time: 4:35 PM
 */

namespace Spt;


/**
 * Class TableBody
 * Renders the table body.
 * @package Spt
 */
class TableBody
{
    /**
     * @var string
     */
    private $pre;

    /**
     * @var array
     */
    private $data;

    /**
     * @var string
     */
    private $post;

    public function __construct(array $data)
    {
        $this->pre = '<tbody>';
        $this->data = $data;
        $this->post = '</tbody>';
    }

    /**
     * Render a table body.
     *
     * @return string
     */
    public function __toString()
    {
        $content = '';
        foreach ($this->data as $row) {
            $tmp = '';
            foreach ((array)$row as $item) {
                $tmp .= $this->makeBodyCell($item);
            }
            $content .= $this->makeBodyRow($tmp);
        }

        return $this->pre . $content . $this->post;
    }

    /**
     * Render a single body cell.
     *
     * @param $value
     * @return string
     */
    private function makeBodyCell($value)
    {
        if ($value && !is_scalar($value)) {
            echo 'Argument must be a scalar, a ' . gettype($value) . ' is given.';
            $value = (string)$value;
        }

        if ($value === '' || $value === null) {
            $value = '-';
        }
        return '<td>' . $value . '</td>';
    }

    /**
     * Render a single row.
     *
     * @param $row
     * @return string
     */
    private function makeBodyRow($row)
    {
        return '<tr>' . $row . '</tr>';
    }
}