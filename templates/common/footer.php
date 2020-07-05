            </div>
            <div id="line-count">
                <span>
                    <?= (!empty($this->data['page']->line_number) ? $this->data['page']->line_number : 13); ?> : 
                    <?= (!empty($this->data['page']->column_number) ? $this->data['page']->column_number : 37); ?>
                </span>
            </div>
        </main>
        <footer class="h-25">
            <div id="footer-content">
                <span id="footer-title">Project:&nbsp;&nbsp;<?= strtoupper($this->data['page']->site->name); ?></span>
                <div>
                    <table class="table table-borderless m-0 p-0">
                        <thead>
                            <tr>
                                <th width="30px">&nbsp;</th>
                                <th>File name</th>
                                <th>Location</th>
                                <th width="100px">Lines</th>
                                <th width="100px">Code</th>
                                <th width="340px">Data</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>*</td>
                                <td><a href="/contact">CONTACT.C</a></td>
                                <td><?= strtoupper($this->data['page']->site->name); ?>.COM</td>
                                <td>16</td>
                                <td>&copy;<?= date('Y'); ?></td>
                                <td>Mike Welsh</td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td><a href="https://kytschi.com" target="_blank">FLASHY-FLASH.C</a></td>
                                <td><a href="https://kytschi.com" target="_blank">KYTSCHI.COM</a></td>
                                <td>26</td>
                                <td>8456</td>
                                <td>Powered By Flash-Flash</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </footer>
    </body>
</html>