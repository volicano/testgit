<?php

/**
 * �����ݸ�ʽ�������νṹ
 * @author Xuefen.Tong
 * @param array $items
 * @return array 
 */
function genTree9($items) {
    $tree = array(); //��ʽ���õ���
    foreach ($items as $item)
        if (isset($items[$item['pid']]))
            $items[$item['pid']]['son'][] = &$items[$item['id']];
        else
            $tree[] = &$items[$item['id']];
    return $tree;
}
 
$items = array(
    1 => array('id' => 1, 'pid' => 0, 'name' => '����ʡ'),
    2 => array('id' => 2, 'pid' => 0, 'name' => '������ʡ'),
    3 => array('id' => 3, 'pid' => 1, 'name' => '�ϲ���'),
    4 => array('id' => 4, 'pid' => 2, 'name' => '��������'),
    5 => array('id' => 5, 'pid' => 2, 'name' => '������'),
    6 => array('id' => 6, 'pid' => 4, 'name' => '�㷻��'),
    7 => array('id' => 7, 'pid' => 4, 'name' => '�ϸ���'),
    8 => array('id' => 8, 'pid' => 6, 'name' => '����·'),
    9 => array('id' => 9, 'pid' => 7, 'name' => '����ֱ��'),
    10 => array('id' => 10, 'pid' => 8, 'name' => '������ҵ��ѧ'),
    11 => array('id' => 11, 'pid' => 9, 'name' => '��������ҵ��ѧ'),
    12 => array('id' => 12, 'pid' => 8, 'name' => '������ʦ����ѧ'),
    13 => array('id' => 13, 'pid' => 1, 'name' => '������'),
    14 => array('id' => 14, 'pid' => 13, 'name' => '����'),
    15 => array('id' => 15, 'pid' => 13, 'name' => '�ڶ���'),
    16 => array('id' => 16, 'pid' => 14, 'name' => 'é����'),
    17 => array('id' => 17, 'pid' => 14, 'name' => '������'),
    18 => array('id' => 18, 'pid' => 16, 'name' => '��Դ��'),
    19 => array('id' => 19, 'pid' => 16, 'name' => '�ϰӴ�'),
);
echo "<pre>";
print_r(genTree9($items));

?>