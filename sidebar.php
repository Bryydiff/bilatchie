<div class="sidebar">
                <div class="logo" style="--bg: #333;">
                    <a href="#">
                    <div class="imgBoox">
                            <img src="img/logo.png">   
                    </div>
                    <div class="text">Sto. Tomas RBI</div>
                    </a>
                </div>
                <div class="menu">
                    <div class="Menulist">
                        <ul>
                            <li style="--bg: #ffa117;" <?php echo $PAGE == "dashboard" ?"class='active'" : ""; ?>>
                                <a href="dashboard.php">
                                    <div class="icon"><ion-icon name="grid"></ion-icon></div>
                                    <div class="text">DASHBOARD</div>
                                </a>
                            </li>
                            <li style="--bg: #f44336;" <?php echo $PAGE == "household" ? "class='active'" : ""; ?>>
                                <a href="household-form.php">
                                    <div class="icon"><ion-icon name="home"></ion-icon></div>
                                    <div class="text">HOUSEHOLD</div>
                                </a>
                            </li>
                            <li style="--bg: #0fc70f;"<?php echo $PAGE == "kabarangay" ? "class='active'" : ""; ?>>
                                <a href="../kabarangay.php">
                                    <div class="icon"><ion-icon name="people"></ion-icon></div>
                                    <div class="text">KA-BARANGAY</div>
                                </a>
                            </li>
                            <li style="--bg: #2196f3;"<?php echo $PAGE == "blotter-list" ? "class='active'" : ""; ?>>
                                <a href="../blotter-list.php">
                                    <div class="icon"><ion-icon name="newspaper"></ion-icon></div>
                                    <div class="text">BLOTTER</div>
                                </a>
                            </li>
                            <li style="--bg: #e9d045;"<?php echo $PAGE == "establishment" ? "class='active'" : ""; ?>>
                                <a href="../establishment/index.php">
                                        <div class="icon"><ion-icon name="business"></ion-icon></div>
                                    <div class="text">ESTABLISHMENT</div>
                                </a>
                            </li>
                            <li style="--bg: #e91e63;"<?php echo $PAGE == "covid-19" ? "class='active'" : ""; ?>>
                                <a href="#">
                                    <div class="icon"><ion-icon name="fitness"></ion-icon></div>
                                    <div class="text">COVID-19</div>
                                </a>
                            </li>
                            <li style="--bg: rgb(30, 233, 182);">
                                <a href="../certificate.php">
                                    <div class="icon"><ion-icon name="receipt"></ion-icon></div>
                                    <div class="text">CERTIFICATE</div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <hr />
                    <div class="bottom">
                        <ul>
                            <li style="--bg: #333;">
                                <a href="#">
                                    <div class="icon">
                                    <div class="imgBx">
                                        <img src="img/376522276_1023314158721897_2179476028798761998_n.jpg">
                                    </div>
                                    </div>
                                    <div class="text">Bimby Ledda</div>
                                </a>
                            </li>
                            <li style="--bg: #333;">
                                <a href="#">
                                    <div class="icon"><ion-icon name="log-out"></ion-icon></div>
                                    <div class="text">Logout</div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>