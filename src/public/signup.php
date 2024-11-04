<body>
  <div>
    <div>
      <h2>会員登録</h2>
      <?php foreach ($errors as $error): ?>
        <p><?php echo $error; ?></p>
      <?php endforeach; ?>
      <form action="./signup_complete.php" method="POST">
        <p>
          <input placeholder="User name" type=“text” name="userName" required value="<?php if (
              isset($_SESSION['userName'])
          ) {
              echo $_SESSION['userName']; //アカウント作成ボタン押下後、登録失敗時にsignin.phpを表示→その時に入力していた項目をフォームに表示させる
          } ?>">
        </p>
        <p><input placeholder="Email" type=“mail” name="email" required value="<?php if (
            isset($_SESSION['email'])
        ) {
            echo $_SESSION['email'];
        } ?>"></p>
        <p><input placeholder="Password" type="password" name="password"></p>
        <p><input placeholder="Password確認" type="password" name="confirmPassword"></p>
        <button type="submit">アカウント作成</button>
      </form>
      <a href="./signin.php">ログイン画面へ</a>
    </div>
  </div>
</body>