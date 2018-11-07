<?php
if ($_POST['id']==1) {
        $arr = array(
        array(//00
             'subject_num'=>0,
            'score'=>82,
            'ranking'=>80
        ),
        array(//111
            'subject_num'=>1,
            'score'=>array(168,50,90),//身高 体重 分数
            'ranking'=>80
        ),
        array(//2
            'subject_num'=>2,
            'score'=>array(3120,90),//成绩 分数
            'ranking'=>78
        ),
        array(//3
            'subject_num'=>3,
            'score'=>array(10,90),//秒 分数
            'ranking'=>88
        ),
        array(//5
            'subject_num'=>5,
            'score'=>array(4,15,90),// 分 秒 分数
            'ranking'=>80
        ),
        array(//7
            'subject_num'=>7,
            'score'=>array(5,90),//成绩 分数
            'ranking'=>86
        )

    );
}else {
    $arr = array(
        array(//00
             'subject_num'=>0,
            'score'=>78,
            'ranking'=>80
        ),
        array(//111
            'subject_num'=>1,
            'score'=>array(168,50,90),
            'ranking'=>80
        ),
        array(//2
            'subject_num'=>2,
            'score'=>array(3120,90),
            'ranking'=>78
        ),
        array(//3
            'subject_num'=>3,
            'score'=>array(10,90),
            'ranking'=>88
        ),
        array(//4
            'subject_num'=>4,
            'score'=>array(4,35,90),
            'ranking'=>80
        ),
        array(//6
            'subject_num'=>6,
            'score'=>array(5,90),
            'ranking'=>86
        )

    );
}

    $js=json_encode($arr);
    echo($js);
?>