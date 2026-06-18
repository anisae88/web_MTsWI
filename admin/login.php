<body style="background-color: #004487; display: flex; justify-content: center; align-items: center; height: 100vh; font-family: sans-serif;">
    <div style="background-color: #2c5991; padding: 50px; border-radius: 8px; width: 350px; text-align: center;">
        <h2 style="color: white; margin-bottom: 30px;">LOGIN</h2>
        <form action="proses_login.php" method="POST">
            <input type="text" name="username" placeholder="Username" style="width: 100%; padding: 12px; margin-bottom: 15px; border-radius: 4px; border: none;">
            <input type="password" name="password" placeholder="Password" style="width: 100%; padding: 12px; margin-bottom: 20px; border-radius: 4px; border: none;">
            <button type="submit" style="width: 100%; padding: 12px; background: #3498db; color: white; border: none; border-radius: 4px; cursor: pointer;">Login</button>
        </form>
    </div>
</body>