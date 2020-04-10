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
                                <th>Lines</th>
                                <th>Code</th>
                                <th>Data</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>*</td>
                                <td><?= strtoupper($this->data['page']->name); ?>.C</td>
                                <td><?= strtoupper($this->data['page']->site->name); ?>.COM</td>
                                <td><?= $this->data['page']->lines; ?></td>
                                <td>&copy;<?= date('Y'); ?></td>
                                <td>Mike Welsh</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </footer>
    </body>
</html>