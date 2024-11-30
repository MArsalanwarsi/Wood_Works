<script>
const passwordPrompt = prompt("Enter the password:");

if (passwordPrompt === "1225411") {
} else {
  alert("Incorrect password");
  location.assign("../index.php")
}
</script>

<?php
include 'header.php'
?>
<style>
    .sidebar a:nth-child(1) {
        text-decoration: underline !important;
        text-underline-offset: 10px;
        color: grey;
        text-shadow: 2px 2px 1px #4b6cb7;
    }
</style>

<!-- Main Content -->


</div>
</div>

<?php
include 'footer.php';
?>