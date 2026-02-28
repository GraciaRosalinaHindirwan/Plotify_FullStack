const input = document.getElementById("searchInput");
const list = document.getElementById("dropdownList");
const items = document.querySelectorAll(".item");
const tagsContainer = document.getElementById("tagsContainer");

let selected = [];

input.addEventListener("focus", () => {
  list.style.display = "block";
});

items.forEach(item => {
  item.addEventListener("click", () => {

    const value = item.textContent;

    if (!selected.includes(value)) {
      selected.push(value);
      createTag(value);
    }

    input.value = "";
    list.style.display = "none";
  });
});

function createTag(text) {

  const tag = document.createElement("div");
  tag.className = "tag";

  tag.innerHTML = `
    ${text}
    <span class="remove">✕</span>
  `;

  tag.querySelector(".remove").onclick = () => {
    tag.remove();
    selected = selected.filter(v => v !== text);
  };

  tagsContainer.appendChild(tag);
}