<?php

/**
 * About template.
 */

$this->include('common/header');

$this->data['page']->line_number = 5;
$this->data['page']->lines = 7;
$this->data['page']->column_number = strlen($this->data['page']->content) + strlen('printf()') + 4;
?>
<div class="w-100">
    <span class="page-title"><span>&#35;include&lt;&nbsp;stdio.h&gt;</span></span><br/>
    <h2 class="page-title">
        <span>&#35;include&lt;</span>&nbsp;<?= strtolower($this->data['page']->title); ?><span>.h&gt;</span>
    </h2>
    <div class="page-content">
        int <span class="text-green">main</span>()<br/>
        <span class="text-yellow">{</span><br/>
            <p class="code-tab">
                <span class="text-green">printf</span>("<span class="text-blue"><?= $this->data['page']->content; ?></span>");
                <span class="cursor">&nbsp;&nbsp;&nbsp;</span>
            </p>
            <p class="code-tab">return <span class="text-grey">0</span>;</p>
        <span class="text-yellow">}</span>
    </div>
</div>
<?php

$this->include('common/footer');
