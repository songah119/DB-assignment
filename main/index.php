<?php
?>

<html>
    <head>
        <title>이화 푸드코드 매출 보고서</title>
        <link rel="stylesheet" href="index.css">
    </head>
    <body>
        <header>
            <h1>이화 푸드코드 매출 보고서</h1>
        </header>
        <main>
            <article class="report">
                <div class="router customer" onClick="location.href='http://localhost:8888/report/DB-assignment/customer'">고객 유형별 주문 건수와 매출</div>
                <div class="router time" onClick="location.href='http://localhost:8888/report/DB-assignment/time'">시간대별 주문 건수와 매출</div>
                <div class="router corner" onClick="location.href='http://localhost:8888/report/DB-assignment/corner'">코너별 주문 건수와 매출</div>
            </article>
        </main>

    </body>
</html>