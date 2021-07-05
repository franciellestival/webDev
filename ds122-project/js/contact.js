function onMouseOut(event) {
  
    if (
        event.clientY < 50 &&
        event.relatedTarget == null &&
        event.target.nodeName.toLowerCase() !== "select"
    ) {
        document.removeEventListener("mouseout", onMouseOut);

        document.getElementById("popup").style.display = "block";
    }
}

document.addEventListener("mouseout", onMouseOut);

