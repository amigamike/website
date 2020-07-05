<div id="popup-compiling" class="popup">
    <div class="popup-border">
        <div class="popup-title">
            <div class="btn-close" data-popup="popup-compiling"><div><span></span></div></div>
            <span class="with-close">Compiling</span>
        </div>
        <div class="popup-content pr-0 pl-0">
            <div class="row mt-3 w-100 mr-0 ml-0">
                <table class="table">
                    <tbody>
                        <tr class="align-top">
                            <td class="text-right">Main file</td>
                            <td width="20px" class="text-center">:</td>
                            <td><?= strtoupper($this->data['page']->name); ?>.C</td>
                        </tr>
                        <tr class="align-top">
                            <td class="text-right">Compiling</td>
                            <td class="text-center">:</td>
                            <td>
                                EDITOR &nbsp;<span class="h3">&rarr;</span>&nbsp; <?= strtoupper($this->data['page']->name); ?>.C
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table class="table">
                    <tbody>
                        <tr class="align-top">
                            <td class="text-right">&nbsp;</td>
                            <td width="20px" class="text-center">&nbsp;</td>
                            <td width="20%">Total</td>
                            <td width="20%">File</td>
                        </tr>
                        <tr class="align-top">
                            <td class="text-right">Lines compiled</td>
                            <td class="text-center">:</td>
                            <td id="compiled-lines-total">0</td>
                            <td id="compiled-lines-file">400</td>
                        </tr>
                        <tr class="align-top">
                            <td class="text-right">Warnings</td>
                            <td class="text-center">:</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                        <tr class="align-top">
                            <td class="text-right">Errors</td>
                            <td class="text-center">:</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                        <tr class="align-top">
                            <td class="text-right">&nbsp;</td>
                            <td class="text-center">&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr class="align-top">
                            <td class="text-right">Available memory</td>
                            <td class="text-center">:</td>
                            <td><span id="available-memory">1942</span>K</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr class="highlight align-top">
                            <td id="compile-message" class="text-right pt-1">Success</td>
                            <td class="text-center pt-1">:</td>
                            <td></td>
                            <td>&nbsp;</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>