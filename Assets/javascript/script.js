const $d = document;
$d.addEventListener("submit", (e) => {
  e.preventDefault();
  const $form = $d.getElementById(e.target.id);
  if (confirm("Desea eliminar este registro?")) {
    $form.submit();
  }
});

const $button_top = $d.getElementById("button-top");

$button_top.addEventListener("click", (e) => {
  scroll(0, 0);
});

$d.addEventListener("scroll", (e) => {
    if (scrollY>500) {
        $button_top.classList.remove("show")
    }else{
        $button_top.classList.add("show")
    }
});
