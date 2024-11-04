<body>
  <div>
    <div>
      <h2>会員登録</h2>
      <form action="./signup_complete.php" method="POST">
        <p><input placeholder="User name" type=“text” name="userName" required value=""></p>
        <p><input placeholder="Email" type=“mail” name="email" required value=""></p>
        <p><input placeholder="Password" type="password" name="password"></p>
        <p><input placeholder="Password確認" type="password" name="confirmPassword"></p>
        <button type="submit">アカウント作成</button>
      </form>
      <a href="./signin.php">ログイン画面へ</a>
    </div>
  </div>
</body>