<?php
    include "header.php";
?>

    <section class="team">
        <div class="container">
            <div class="team__top">
                <div class="team__descr">
                    <p class="team__descr-title">О нас и нашей команде</p>
                    <p class="team__descr-text">Твой фитнес-тренер - это оптимизированный сайт для взаимодействия тренера и клиента</p>
                    <p class="team__descr-text">Наш сайт поможет привести себя в отличную спортивную форму. Чтобы познакомиться с фитнес-тренром, первый раз вы можете выбрать тренера который проведет вам бесплатно первую тренировку.</p>
                    <p class="team__descr-text">У нас работают только опытные тренеры и инструкторы, которые всегда подскажут и помогут вам. Вы сможете и накачать мышцы и научиться танцевать и ходить на фитнес.</p>
                </div>
                <div class="team__img">
                    <img src="../images/team.png" alt="">
                </div>
            </div>

            <div class="team__filter">
                <p class="team__filter-title">Выбери своего тренера</p>
                <ul class="team__filter-list">
                    <li class="team__filter-li" data-f="all">все</li>
                    <li class="team__filter-li" data-f="joga">йога</li>
                    <li class="team__filter-li" data-f="lose_weight">похудение</li>
                    <li class="team__filter-li" data-f="ofp">офп</li>
                    <li class="team__filter-li" data-f="get_fit">набор массы</li>
                    <li class="team__filter-li" data-f="competition">подготовка к соревнованиям</li>
                </ul>
            </div>

            <div class="team__list">
                <div class="team__list-item box joga ofp competition">
                    <div class="team__list-img">
                        <img src="../images/teamListImg1.png" alt="">
                    </div>
                    <div class="team__list-descr">
                        <p class="team__list-name">ЕКАТЕРИНА ЛЕБЕДЕВА</p>
                        <p class="team__list-text">Сертифицированный специалист в области спортивной диетологии нутрициологии. Основатель проекта "Латика фит". Автор многочисленных курсов по детоксу организма, автор книги "простых и полезных рецептов". Мотиватор. Помогла более 1000 людям улучшить и полюбить свое тело.</p>
                        <ul class="team__list-list">
                            <li class="team__list-li">йога</li>
                            <li class="team__list-li">офп</li>
                            <li class="team__list-li">подготовка к соревнованиям</li>
                        </ul>
                    </div>
                </div>
                <div class="team__list-item box lose_weight ofp get_fit competition">
                    <div class="team__list-img">
                        <img src="../images/teamListImg2.png" alt="">
                    </div>
                    <div class="team__list-descr">
                        <p class="team__list-name">АНДРЕЙ ЖУКОВ</p>
                        <p class="team__list-text">Одна из основных специализаций этого тренера — создание идеального пресса при любых исходных данных. В своих программах он использует комплексный подход и приобщает клиентов сразу к нескольким видам спорта: летом — велосипед, зимой — лыжи, круглогодично — пробежки на свежем воздухе. Его подопечные отмечают невозмутимый и уравновешенный характер тренера.</p>
                        <ul class="team__list-list">
                            <li class="team__list-li">похудение</li>
                            <li class="team__list-li">офп</li>
                            <li class="team__list-li">набор массы</li>
                            <li class="team__list-li">подготовка к соревнованиям</li>
                        </ul>
                    </div>
                </div>
                <div class="team__list-item box lose_weight get_fit">
                    <div class="team__list-img">
                        <img src="../images/teamListImg3.png" alt="">
                    </div>
                    <div class="team__list-descr">
                        <p class="team__list-name">СЕРГЕЙ ЛАВРЕНОВ</p>
                        <p class="team__list-text">Тренер делает упор не только на работу на тренажерах в зале, но и на плавание. Занятия этим видом спорта могут преследовать несколько целей: общее физическое развитие или целенаправленная подготовка к соревнованиям для получения спортивного разряда. Этот фитнес-наставник консультирует и тренирует профессиональных спортсменов из других направлений, для которых плавание является способом отдыха.</p>
                        <ul class="team__list-list">
                            <li class="team__list-li">похудение</li>
                            <li class="team__list-li">набор массы</li>                     
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/filter.js"></script>
</body>
</html>