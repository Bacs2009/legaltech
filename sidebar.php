<div class="news">
    <h2><a href="#" id="news" style="text-align:center; margin-left:60px; font-family:Conv_HE_ETH__; font-size:18px; color:#069; font-weight:800;">Новини</a></h2>
    <div class="firstnew">
        <?php
		if ( have_posts() ) : // если имеются записи в блоге.
		  query_posts('category_name=Новости&posts_per_page=3');   // указываем ID рубрик, которые необходимо вывести.
		  while (have_posts()) : the_post();  // запускаем цикл обхода материалов блога
			the_excerpt();
		  endwhile;  // завершаем цикл.
		endif;
		/* Сбрасываем настройки цикла. Если ниже по коду будет идти еще один цикл, чтобы не было сбоя. */
		wp_reset_query();                
		?>
        <div class="lineNews2"></div>
        <br>
        <h2><a href="#" id="oficial" style="text-align:center; margin-left:-7px; font-family:Conv_HE_ETH__; font-size:18px; color:#069; font-weight:800;">Офіційні документи</a></h2><br>
        <a href="#new4"><text style="text-align:left; font-family:Conv_HE_ETH__; font-size:14px; color:#000;"><?=$title4?></text><text style="text-align:left; font-family:Conv_HE_ETH__; font-size:12px; color:#069"><br>докладніше >></text></a><br><?=$changefour?><br><br>
        <!--<text style="text-align:left; font-family:Conv_HE_ETH__; font-size:14px; color:#000;"><?=$title5?></text><a href="#new5"><text style="text-align:left; font-family:Conv_HE_ETH__; font-size:12px; color:#069"><br>докладніше >></text></a><br><?=$changefive?><br><br>-->
        <div class="lineNews2"></div>
        <br>
        <h2><a href="#" id="zvernit" style="text-align:center; margin-left:-7px; font-family:Conv_HE_ETH__; font-size:18px; color:#069; font-weight:800;">Зверніть увагу!</a></h2><br>
        <a href="#new6"><text style="text-align:left; font-family:Conv_HE_ETH__; font-size:14px; color:#000;"><?=$title6?></text><text style="text-align:left; font-family:Conv_HE_ETH__; font-size:12px; color:#069"><br>докладніше >></text></a><br><?=$changesix?><br><br>
    </div>
</div>
<br/>
