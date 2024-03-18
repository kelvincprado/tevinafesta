<div id="conteudo-lateral">
    <?
    $buscaBanners = mysql_query("SELECT * FROM isw_banner WHERE status='0' AND (id_tipo='3' OR id_tipo='4' OR id_tipo='5') ORDER BY tipo DESC, posicao ASC, rand()");
    if (mysql_num_rows($buscaBanners) > 0) {
        while ($montaBanners = mysql_fetch_array($buscaBanners)) {
            if ($montaBanners['id_tipo'] == 3) {
                $class = 'simples';
            }
            if ($montaBanners['id_tipo'] == 4) {
                $class = 'duplo';
            }
            if ($montaBanners['id_tipo'] == 5) {
                $class = 'triplo';
            }
    ?>
            <div class="banner slidebanners <?= $class ?>">
                <?
                $hrefA = "";
                $hrefB = "";
                if ($montaBanners['link_href'] == "") {
                    $hrefA = "";
                    $hrefB = "";
                } else {
                    if ($montaBanners['link_target'] == 2) {
                        $target = "_blank";
                    }
                    if ($montaBanners['link_target'] == 1) {
                        $target = "_parent";
                    }
                    $hrefA = "<a href='$montaBanners[link_href]' target='$target'>";
                    $hrefB = "</a>";
                }
                if (file_exists("painel/conteudo/banner/" . $montaBanners['arquivo']) and $montaBanners['arquivo'] != '') { ?>
                    <?= $hrefA ?><img src="painel/conteudo/banner/<?= $montaBanners['arquivo'] ?>"><?= $hrefB ?>
                <?
                }
                if (file_exists("painel/conteudo/banner/" . $montaBanners['arquivo2']) and $montaBanners['arquivo2'] != '') { ?>
                    <?= $hrefA ?><img src="painel/conteudo/banner/<?= $montaBanners['arquivo2'] ?>"><?= $hrefB ?>
                <?
                }
                if (file_exists("painel/conteudo/banner/" . $montaBanners['arquivo3']) and $montaBanners['arquivo3'] != '') { ?>
                    <?= $hrefA ?><img src="painel/conteudo/banner/<?= $montaBanners['arquivo3'] ?>"><?= $hrefB ?>
                <?
                }
                if (file_exists("painel/conteudo/banner/" . $montaBanners['arquivo4']) and $montaBanners['arquivo4'] != '') { ?>
                    <?= $hrefA ?><img src="painel/conteudo/banner/<?= $montaBanners['arquivo4'] ?>"><?= $hrefB ?>
                <?
                }
                if (file_exists("painel/conteudo/banner/" . $montaBanners['arquivo5']) and $montaBanners['arquivo5'] != '') { ?>
                    <?= $hrefA ?><img src="painel/conteudo/banner/<?= $montaBanners['arquivo5'] ?>"><?= $hrefB ?>
                <?
                }
                if (file_exists("painel/conteudo/banner/" . $montaBanners['arquivo6']) and $montaBanners['arquivo6'] != '') { ?>
                    <?= $hrefA ?><img src="painel/conteudo/banner/<?= $montaBanners['arquivo6'] ?>"><?= $hrefB ?>
                <?
                }
                if (file_exists("painel/conteudo/banner/" . $montaBanners['arquivo7']) and $montaBanners['arquivo7'] != '') { ?>
                    <?= $hrefA ?><img src="painel/conteudo/banner/<?= $montaBanners['arquivo7'] ?>"><?= $hrefB ?>
                <?
                }
                if (file_exists("painel/conteudo/banner/" . $montaBanners['arquivo8']) and $montaBanners['arquivo8'] != '') { ?>
                    <?= $hrefA ?><img src="painel/conteudo/banner/<?= $montaBanners['arquivo8'] ?>"><?= $hrefB ?>
                <?
                }
                ?>
            </div>
    <?
        }
    }
    ?>
</div>