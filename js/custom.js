document.addEventListener('DOMContentLoaded', function() {
  bubbly({
    colorStart: "#faf4ed",
    colorStop: "#f7f1f0",
    blur: 1,
    compose: 'source-over',
    bubbleFunc:() => `hsla(${Math.random() * 50}, 100%, 50%, .2)`
  });

  if (typeof document.getElementsByName("wallpaper1")[0] !== "undefined") {
    const height1 = document.getElementsByName("height1")[0].value;
    const width1 = document.getElementsByName("width1")[0].value;
    $total1 = Math.ceil(((height1 * width1) / 10000) * 5000);
  }else{
    $total1 = 0;
  }
  if (typeof document.getElementsByName("wallpaper2")[0] !== "undefined") {
    const height2 = document.getElementsByName("height2")[0].value;
    const width2 = document.getElementsByName("width2")[0].value;
    $total2 = Math.ceil(((height2 * width2) / 10000) * 5000);
  }else{
    $total2 = 0;
  }
  if (typeof document.getElementsByName("wallpaper3")[0] !== "undefined") {
    const height3 = document.getElementsByName("height3")[0].value;
    const width3 = document.getElementsByName("width3")[0].value;
    $total3 = Math.ceil(((height3 * width3) / 10000) * 5000);
  }else{
    $total3 = 0;
  }
  $all_amount = $total1 + $total2 + $total3;
  document.getElementsByName("amount")[0].value = $all_amount;
  document.getElementById("amount").innerHTML = $all_amount.toLocaleString() + "　円";
});

function creditform_on() {
  document.getElementById("creditcard").style.display = "block";
}

function creditform_off() {
  document.getElementById("creditcard").style.display = "none";
}

function addwall() {
  const wall2 = document.getElementById("wall2");
  const wall3 = document.getElementById("wall3");
  const btndiffwall = document.getElementById("btndiffwall");
  const btnaddwall = document.getElementById("btnaddwall");
  
  if (wall2.style.display == "none") {
    wall2.style.display ="block";
    btndiffwall.style.display ="block";
    btnaddwall.style.display ="block";
  }else if (wall3.style.display == "none") {
    wall3.style.display ="block";
    btndiffwall.style.display ="block";
    btnaddwall.style.display ="none";
  }
}

function diffwall() {
  const wall2 = document.getElementById("wall2");
  const wall3 = document.getElementById("wall3");
  const btndiffwall = document.getElementById("btndiffwall");
  const btnaddwall = document.getElementById("btnaddwall");
  const input_wallpaper3 = document.getElementById("wallpaper3");
  const input_wallpaper2 = document.getElementById("wallpaper2");
  var wall3_imges = document.getElementsByClassName("wall3_img");
  var wall2_imges = document.getElementsByClassName("wall2_img");
  const height3 = document.getElementById("height3");
  const width3 = document.getElementById("width3");
  const height2 = document.getElementById("height2");
  const width2 = document.getElementById("width2");
  
  if (wall3.style.display == "block") {
    wall3.style.display ="none";
    btndiffwall.style.display ="block";
    btnaddwall.style.display ="block";
    input_wallpaper3.value = "";
    for (let i = 0; i < wall3_imges.length; i++) {
      wall3_imges[i].style.border = "none";
    }
    height3.value = "100";
    width3.value = "100";
  }else if (wall2.style.display == "block") {
    wall2.style.display ="none";
    btndiffwall.style.display ="none";
    btnaddwall.style.display ="block";
    input_wallpaper2.value = "";
    for (let i = 0; i < wall2_imges.length; i++) {
      wall2_imges[i].style.border = "none";
    }
    height2.value = "100";
    width2.value = "100";
  }
}

function wall1(selectedImg) {
  var wall1_imges = document.getElementsByClassName("wall1_img");
  const input_wallpaper = document.getElementById("wallpaper1");

  for (let i = 0; i < wall1_imges.length; i++) {
    wall1_imges[i].style.border = "none";
  }
  selectedImg.style.border = "solid #ea9fed 5px";
  input_wallpaper.value = selectedImg.id;
}

function wall2(selectedImg) {
  var wall2_imges = document.getElementsByClassName("wall2_img");
  const input_wallpaper = document.getElementById("wallpaper2");

  for (let i = 0; i < wall2_imges.length; i++) {
    wall2_imges[i].style.border = "none";
  }
  selectedImg.style.border = "solid #ea9fed 5px";
  input_wallpaper.value = selectedImg.id;
}

function wall3(selectedImg) {
  var wall3_imges = document.getElementsByClassName("wall3_img");
  const input_wallpaper = document.getElementById("wallpaper3");

  for (let i = 0; i < wall3_imges.length; i++) {
    wall3_imges[i].style.border = "none";
  }
  selectedImg.style.border = "solid #ea9fed 5px";
  input_wallpaper.value = selectedImg.id;
}
