<?php

/**
 * Contact template.
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
    <div class="popup d-block">
        <div class="popup-border">
            <div class="popup-title"><span>Linker</span></div>
            <div class="popup-content">
                <div class="row mt-3 pl-5 pr-4 w-100">
                    <table class="table">
                        <tbody>
                            <tr class="align-top">
                                <td>
                                    <label><span class="text-yellow">Y</span>our name</label>
                                    <input class="form-control" type="text" name="name"/>
                                </td>
                            </tr>
                            <tr class="align-top">
                                <td>
                                    <label><span class="text-yellow">Y</span>our email</label>
                                    <input class="form-control" type="email" name="email"/>
                                </td>
                            </tr>
                            <tr class="align-top">
                                <td>
                                    <label><span class="text-yellow">Y</span>our message</label>
                                    <textarea class="form-control" rows="3" name="message"></textarea>
                                </td>
                            </tr>
                            <tr class="align-top">
                                <td>
                                    <label><span class="text-yellow">A</span>re you a bot?</label>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="w-100 mt-1">
                        <span class="btn btn-default text-center float-right mr-3"><span class="text-light-blue">O</span>k</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php

$this->include('common/footer');
