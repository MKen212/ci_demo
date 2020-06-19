<!-- Testing .env -->
<div>
  <pre>
    <?php
    echo "Server:";
    print_r($_SERVER);
    echo "<br /><br />";
    echo "Env:";
    print_r($_ENV);
    echo "<br /><br />";
    echo "Token Name: ${tokenName}<br />";
    echo "Token Price: ${tokenPrice}<br />";
    ?>
  </pre>
</div>