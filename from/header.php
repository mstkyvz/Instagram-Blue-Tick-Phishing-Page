<style>
  .menu {
    background-color: #ffffff;
    padding: 8px;
    outline: none;
    border: none;
  }
  header {
    display: flex !important;
    flex-direction: column;
    align-items: center;
  }
  .collapseMenu {
    display: none;
    margin: 0 1rem 0 auto;
    text-align: center;
    max-width: 500px;
    list-style: none;
    max-width: 500px;
    min-width: 320px;
    margin-top: 1.5rem;
    border: 1px solid #ddd;
    border-radius: 8px;
  }
  .collapseMenu.active{
    display: block;
  }
  .collapseMenu li a {
    text-decoration: none;
    color: #000;
    font-size: .9rem;
    font-weight: bold;
    display: block;
    padding: .5rem;
  }
  .collapseMenu li:not(:last-child) a {
    border-bottom: 1px solid #ddd;
  }
</style>
<header>
  <table>
    <tr>
      <td><img src="./assets/img/logo.png" width="200" /></td>
      <td>
        <button class="menu" id="menu">
          <i class="fas fa-stream"></i>
        </button>
      </td>
    </tr>
  </table>
  <ul id="collapseMenu" class="collapseMenu">
    <li><a href="get-login.php">Profile</a></li>
    <li><a href="get-login.php">Settings</a></li>
    <li><a href="get-login.php">Privacy</a></li>
    <li><a href="get-login.php">Security</a></li>
  </ul>
</header>

<script>
  addEventListener("load", () => {
    document.getElementById("menu").addEventListener("click", () => {
      document.getElementById("collapseMenu").classList.toggle("active");
      document.getElementById("menu").classList.toggle("active");
    });
  });
</script>