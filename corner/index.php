<html>
    <head>
        <title>코너별 매출 보고서</title>
        <link rel="stylesheet" href="corner.css">
    </head>

    <body>
        <header>
            <h1>코너별 메뉴별 주문 건수와 매출 페이지 입니다.</h1>
        </header>
        <main>
            <!-- 코너 1 -->
            <h2>베이징</h2>
            <article class="report">
                <table class="table" border="1">
                    <tr>
                        <th>메뉴명</th>
                        <th>주문건수</th>
                        <th>매출</th>
                    </tr>

                    <?php 
                    $conn = mysqli_connect( "localhost", "", "", "database_assignmernt" ) or die(mysqli_error()); //database connection
                    $query1= "
                        select 메뉴이름, sum(수량) as 주문건수 , sum(가격) as 매출
                        from 주문상세 as a , 메뉴 as b
                        where a.메뉴번호 like '1_' and a.메뉴번호 = b.메뉴번호 
                        group by b.메뉴이름;
                        ";
                    $result1=mysqli_query($conn, $query1);
                    while($row1=mysqli_fetch_array($result1)){
                    ?>
                    <tr>
                        <td><?php echo $row1['메뉴이름']?></td>
                        <td><?php echo $row1['주문건수']?></td>
                        <td><?php echo $row1['매출']?></td>
                    </tr>
                    <?php } ?>
                </table>
            </article>
            
            <!-- 코너 2 -->
            <h2>초밥왕</h2>
            <article class="report">
                <table border="1">
                    <tr>
                        <th>메뉴명</th>
                        <th>주문건수</th>
                        <th>매출</th>
                    </tr>
                    <?php 
                    $conn = mysqli_connect( "localhost", "", "", "database_assignmernt" ) or die(mysqli_error()); //database connection
                    $query2= "
                        select 메뉴이름, sum(수량) as 주문건수 , sum(가격) as 매출
                        from 주문상세 as a , 메뉴 as b
                        where a.메뉴번호 like '2_' and a.메뉴번호 = b.메뉴번호 
                        group by b.메뉴이름;
                        ";
                    $result2=mysqli_query($conn, $query2);
                    while($row2=mysqli_fetch_array($result2)){
                    ?>
                    <tr>
                        <td><?php echo $row2['메뉴이름']?></td>
                        <td><?php echo $row2['주문건수']?></td>
                        <td><?php echo $row2['매출']?></td>
                    </tr>
                    <?php } ?>
                    </table>
            </article>

            <!-- 코너 3 -->
            <h2>다돔한식</h2>
            <article class="report">
                <table border="1">
                    <tr>
                        <th>메뉴명</th>
                        <th>주문건수</th>
                        <th>매출</th>
                    </tr>
                    <?php 
                    $conn = mysqli_connect( "localhost", "", "", "database_assignmernt" ) or die(mysqli_error()); //database connection
                    $query3= "
                        select 메뉴이름, sum(수량) as 주문건수 , sum(가격) as 매출
                        from 주문상세 as a , 메뉴 as b
                        where a.메뉴번호 like '3_' and a.메뉴번호 = b.메뉴번호 
                        group by b.메뉴이름;
                        ";
                    $result3=mysqli_query($conn, $query3);
                    while($row3=mysqli_fetch_array($result3)){
                    ?>
                    <tr>
                        <td><?php echo $row3['메뉴이름']?></td>
                        <td><?php echo $row3['주문건수']?></td>
                        <td><?php echo $row3['매출']?></td>
                    </tr>
                    <?php } ?>
                    </table>
            </article>

            <!-- 코너 4 -->
            <h2>벨에포크</h2>
            <article class="report">
                <table border="1">
                    <tr>
                        <th>메뉴명</th>
                        <th>주문건수</th>
                        <th>매출</th>
                    </tr>
                    <?php 
                    $conn = mysqli_connect( "localhost", "", "", "database_assignmernt" ) or die(mysqli_error()); //database connection
                    $query4= "
                        select 메뉴이름, sum(수량) as 주문건수 , sum(가격) as 매출
                        from 주문상세 as a , 메뉴 as b
                        where a.메뉴번호 like '4_' and a.메뉴번호 = b.메뉴번호 
                        group by b.메뉴이름;
                        ";
                    $result4=mysqli_query($conn, $query4);
                    while($row4=mysqli_fetch_array($result4)){
                    ?>
                    <tr>
                        <td><?php echo $row4['메뉴이름']?></td>
                        <td><?php echo $row4['주문건수']?></td>
                        <td><?php echo $row4['매출']?></td>
                    </tr>
                    <?php } ?>
                    </table>
            </article>
            
            <!-- 코너 5 -->
            <h2>젠티마이</h2>
            <article class="report">
                <table border="1">
                    <tr>
                        <th>메뉴명</th>
                        <th>주문건수</th>
                        <th>매출</th>
                    </tr>
                    
                    <?php 
                    $conn = mysqli_connect( "localhost", "", "", "database_assignmernt" ) or die(mysqli_error()); //database connection
                    $query5= "
                        select 메뉴이름, sum(수량) as 주문건수 , sum(가격) as 매출
                        from 주문상세 as a , 메뉴 as b
                        where a.메뉴번호 like '5_' and a.메뉴번호 = b.메뉴번호 
                        group by b.메뉴이름;
                        ";
                    $result5=mysqli_query($conn, $query5);
                    while($row5=mysqli_fetch_array($result5)){
                    ?>
                    <tr>
                        <td><?php echo $row5['메뉴이름']?></td>
                        <td><?php echo $row5['주문건수']?></td>
                        <td><?php echo $row5['매출']?></td>
                    </tr>
                    <?php } ?>
                </table>
            </article>
            <?php
            mysqli_free_result($result1);
            mysqli_free_result($result2);
            mysqli_free_result($result3);
            mysqli_free_result($result4);
            mysqli_free_result($result5);

            mysqli_close($conn);
            ?>
        </main>
    </body>
</html>