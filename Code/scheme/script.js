function myscheme() {
  const genderElement = document.getElementById("gender");
  const ageElement = document.getElementById("age");
  const occupationElement = document.getElementById("occupation");
  const categoryElement = document.getElementById("category");
  const residenceElement = document.getElementById("residence");
  const incomeElement = document.getElementById("income");

  const gender = genderElement.value;
  const age = ageElement.value;
  const occupation = occupationElement.value;
  const category = categoryElement.value;
  const residence = residenceElement.value;
  const income = incomeElement.value;

  const mainBodyElement = document.getElementById("main-body");
  const scheme1Element = document.getElementById("scheme1");
  const scheme2Element = document.getElementById("scheme2");
  const scheme3Element = document.getElementById("scheme3");
  const scheme4Element = document.getElementById("scheme4");
  const scheme5Element = document.getElementById("scheme5");
  const scheme6Element = document.getElementById("scheme6");
  const scheme7Element = document.getElementById("scheme7");
  const scheme8Element = document.getElementById("scheme8");
  const scheme9Element = document.getElementById("scheme9");
  const scheme10Element = document.getElementById("scheme10");

  mainBodyElement.style.display = "none";
  scheme1Element.style.display = "none";
  scheme2Element.style.display = "none";
  scheme3Element.style.display = "none";
  scheme4Element.style.display = "none";
  scheme5Element.style.display = "none";
  scheme6Element.style.display = "none";
  scheme7Element.style.display = "none";
  scheme8Element.style.display = "none";
  scheme9Element.style.display = "none";
  scheme10Element.style.display = "none";

  if (
    gender === "female" &&
    (age === "25year" || age === "35year" || age === "60year")
  ) {
    scheme1Element.style.display = "block";
  } else if (age === "60above" && income == "2L") {
    scheme2Element.style.display = "block";
  } else if (
    occupation === "farmer" &&
    (age === "25year" || age === "35year" || age === "60year")
  ) {
    scheme3Element.style.display = "block";
  } else if (age === "60above" && income == "2L") {
    scheme2Element.style.display = "block";
  }  else {
    alert("No Schemes Found!");
  }
}
