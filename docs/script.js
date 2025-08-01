function updateValue(num) {
  const slider = document.getElementById('m' + num);
  const val = document.getElementById('val' + num);
  val.textContent = slider.value;
}

function getSliderValues() {
  let values = {};
  for (let i = 1; i <= 6; i++) {
    values['m' + i] = document.getElementById('m' + i).value;
  }
  return values;
}

function resetSliders() {
  for (let i = 1; i <= 6; i++) {
    document.getElementById('m' + i).value = 90;
    document.getElementById('val' + i).textContent = 90;
  }
}

function savePose() {
  const values = getSliderValues();
  fetch('save_pose.php', {
    method: 'POST',
    headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
    body: new URLSearchParams(values)
  }).then(() => fetchSavedPoses());
}

function fetchSavedPoses() {
  fetch('get_poses.php')
    .then(res => res.text())
    .then(html => {
      document.getElementById('pose-table').innerHTML = html;
    });
}

function loadPose(id) {
  fetch('load_pose.php?id=' + id)
    .then(res => res.json())
    .then(data => {
      for (let i = 1; i <= 6; i++) {
        document.getElementById('m' + i).value = data['servo' + i];
        document.getElementById('val' + i).textContent = data['servo' + i];
      }
    });
}

function removePose(id) {
  fetch('remove_pose.php?id=' + id)
    .then(res => res.text())
    .then(() => fetchSavedPoses());
}

function runPose() {
    fetch('run_pose.php');
}

window.onload = fetchSavedPoses;