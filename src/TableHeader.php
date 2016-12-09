<?php
/**
 * Created by PhpStorm.
 * User: Frost Wong <frostwong@gmail.com>
 * Date: 12/9/16
 * Time: 4:34 PM
 */

namespace Spt;


/**
 * Class TableHeader
 * Renders the table header.
 * @package Spt
 */
class TableHeader
{
    /**
     * @var string
     */
    private $pre;

    /**
     * @var array
     */
    private $fields;

    /**
     * @var string
     */
    private $post;

    public function __construct(array $fields)
    {
        $this->pre = <<<'EOD'
<table style="text-align: center;" border="1" cellspacing="0">
<thead>
<tr>
EOD;
        $this->fields = $fields;
        $this->post = '</thead></tr>';
    }

    /**
     * Render a complete table header.
     *
     * @return string
     */
    public function __toString()
    {
        $content = '';
        foreach ($this->fields as $field) {
            $content .= $this->makeHeaderCell($field);
        }
        $content .= $this->post;

        return $this->pre . $content . $this->post;
    }

    /**
     * Render a single header cell.
     *
     * @param $field
     * @return string
     */
    private function makeHeaderCell($field)
    {
        if (!is_scalar($field)) {
            echo 'Argument must be a scalar, a ' . gettype($field) . ' is given.';
            die();
        }
        return '<th>' . $field . '</th>';
    }
}