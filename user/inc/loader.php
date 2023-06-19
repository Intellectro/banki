<?php $row = executeQuery("SELECT * FROM setting WHERE item = 'error'"); ?>

<style>
  .load-overlay {
    position: fixed;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, .75);
    display: none;
    z-index: 99999;
    align-items: center;
    justify-content: center;
  }

  .load-overlay.show {
    display: flex;
  }

  .loader {
    width: 70px;
    height: 70px;
    border: 10px solid transparent;
    border-top: 10px solid #fff;
    animation: spin .5s linear infinite;
    border-radius: 50%;
  }

  @keyframes spin {
    to {
      transform: rotate(360deg);
    }
  }
</style>

<div class="load-overlay">
  <div class="loader"></div>
</div>

<script>
  const handleStartLoading = (e) => {
    document.querySelector(".load-overlay").classList.add("show")
    setTimeout(() => {
      handleNextSection()
    }, 10000)
  
  }

  const handleNextSection = () => {
    // Close the modal
    document.querySelector(".load-overlay").remove();
    swal({
      title: "<?= $row['value'] ?>",
      text: "<?= $row['extra'] ?>",
      icon: "error",
      button: "Close"
    })
  }

  handleStartLoading()
</script>