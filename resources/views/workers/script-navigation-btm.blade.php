<script>
    var btnNavOpen = document.querySelector(".btn-nav ");
    var btnNavClose = document.querySelector(".btn-close-nav");
    var openNavigationModal = document.querySelector(".modal");

    btnNavOpen.addEventListener("click", function() {
      openNavigationModal.classList.toggle("active-modal");
      console.log('hoi');
    });

    btnNavClose.addEventListener("click", function() {
      openNavigationModal.classList.remove("active-modal");
      console.log('hoi');
    });
</script>
