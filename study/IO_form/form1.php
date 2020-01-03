<html>
<body>
<!-- action은 어떤 url로 보낼 것인지 판단. -->
<!-- 웹서버 만으로는 상호작용하는 웹 어플리케이션을 만들 수 없다. -->
<!-- 사용자가 url을 카피해서 링크를 걸수 있도록 하려고 하면 get방식을 사용해야하고 -->
<!-- 보안이 필요한 정보를 전송하려면 post방식을 사용해야한다. -->
    <form method="get" action="io2.php">
        id :  <input type="text" name="id" />
        password :  <input type="text" name="password" />
        <input type="submit" />
    </form>
</body>
</html>