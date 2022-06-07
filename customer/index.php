<html>
<head>
        <title>고객별 매출 보고서</title>
        <link rel="stylesheet" href="customer.css">
    </head>
    <body>
        <header>
            <h1>고객 유형별 주문 건수와 매출 페이지 입니다.</h1>
        </header>

        <article class="report">
                <table class="" border="1">
                    <tr>
                        <th>성별</th>
                        <th>주문건수</th>
                        <th>매출</th>
                    </tr>

                    <?php 
                    $conn = mysqli_connect( "localhost", "", "", "database_assignmernt" ) or die(mysqli_error()); //database connection
                    $query= "
                        select 성별, sum(수량) as 주문건수 , sum(가격) as 매출
                        from 주문상세 as a , 고객 as b , 메뉴 as c
                        where a.전화번호 = b.전화번호 and a.메뉴번호 = c.메뉴번호
                        group by b.성별;
                        ";
                    $result=mysqli_query($conn, $query);
                    while($row=mysqli_fetch_array($result)){
                    ?>
                    <tr>
                        <td><?php echo $row['성별']?></td>
                        <td><?php echo $row['주문건수']?></td>
                        <td><?php echo $row['매출']?></td>
                    </tr>
                    <?php } ?>
                </table>
            </article>

            <article class="report">
                <table class="" border="1">
                    <tr>
                        <th>나이대</th>
                        <th>주문건수</th>
                        <th>매출</th>
                    </tr>

                    <?php 
                    $conn = mysqli_connect( "localhost", "", "", "database_assignmernt" ) or die(mysqli_error()); //database connection
                    $querya= "
                        select case
                        when 나이 < 30 then '20대'
                        when 나이 < 40 then '30대'
                        when 나이 < 50 then '40대'
                        when 나이 >= 50 then '50대 이상'
                        END AS 나이대, sum(수량) as 주문건수 , sum(가격) as 매출
                        from 주문상세 as a , 고객 as b , 메뉴 as c
                        where a.전화번호 = b.전화번호 and a.메뉴번호 = c.메뉴번호
                        group by 나이대
                        order by 나이대;
                        ";
                    $resulta=mysqli_query($conn, $querya);
                    while($rowa=mysqli_fetch_array($resulta)){
                    ?>
                    <tr>
                        <td><?php echo $rowa['나이대']?></td>
                        <td><?php echo $rowa['주문건수']?></td>
                        <td><?php echo $rowa['매출']?></td>
                    </tr>
                    <?php } ?>
                </table>
            </article>
    </body>
</html>