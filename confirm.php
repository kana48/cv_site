<body>

    <h2>問合せ内容</h2>

    <form action="mailto.php" method="post">

        <table border="1">
            <tr>
                <td>Name</td>
                <td><?php echo $_POST["name"]; ?></td>
            </tr>
            <tr>
                <td>Adress Mail</td>
                <td><?php echo $_POST["mail"]; ?></td>
            </tr>
            <tr>
                <td>Message</td>
                <td><?php echo $_POST["inquiry"]; ?></td>
            </tr>
        </table>

        <input type="submit" value="Envoyer" />
    </form>

</body>