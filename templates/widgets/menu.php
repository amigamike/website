<?php

/**
 * Menu widget.
 *
 * @author      Mike Welsh (mike@amigamike.com)
 * @copyright   2020 Mike Welsh
 * @link        https://amigamike.com
 */

use JAMbi\FlashyFlash\Models\Page;

$model = new Page();
$pages = $model->where(
    [
        $model->getTable() . '.site_id' => $this->data['page']->site_id
    ]
)
->get();

?>
<ul class="nav">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">File</a>
        <div class="dropdown-menu">
            <div class="dropdown-content">
                <span class="dropdown-item" data-popup="file-box">Open</span>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Help</a>
        <div class="dropdown-menu">
            <div class="dropdown-content">
                <a class="dropdown-item" href="/about">About</a>
                <a class="dropdown-item" href="/contact">Contact</a>
            </div>
        </div>
    </li>
</ul>
<div id="file-box" class="popup">
    <div class="popup-border">
        <div class="popup-title"><span>Open File</span></div>
        <div class="popup-content">
            <div class="popup-close" data-popup="file-box"><span><span>&nbsp;</span></span></div>
            <div class="row mt-4 pl-5 pr-4 w-100">
                <table class="table h-100">
                    <tbody>
                        <tr class="align-top">
                            <td class="w-75">
                                <label><span class="text-yellow">F</span>iles</label>
                                <ul class="file-box w-100 h-100">
                                    <?php
                                    
                                    if ($pages) {
                                        foreach ($pages as $page) {
                                            ?>
                                            <li><a href="<?= $page->path; ?>"><?= strtoupper($page->name); ?>.C</a></li>
                                            <?php
                                        }
                                    }
                                    ?>
                                    <li>..&#92;</li>
                                </ul>
                            </td>
                            <td class="align-bottom text-center pl-3">
                                <span class="btn btn-default">Open</span><br/>
                                <span class="btn btn-default btn-close" data-popup="file-box">Cancel</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
        