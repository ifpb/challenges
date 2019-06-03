Array.prototype.unique = function() {
  return this.filter((x, i, a) => a.indexOf(x) == i);
};

const projectsElm = document.querySelector('.projects');
const searchElm = document.querySelector('input#search');
const sortElm = document.querySelector('select');

const filters = {
  topics: [],
  subject: [],
  session: [],
  course: [],
  campus: [],
};

createProjectsView(projects);
sortFilters();
loadFiltersView();
searchElm.addEventListener('keyup', () => filterProjects());
sortElm.addEventListener('change', () => createProjectsView(projects));

function createProjectsView(projects) {
  const order = document.querySelector('option:checked').value;
  projects.sort((a, b) => a[order].localeCompare(b[order]));
  if (projects.length) {
    projectsElm.innerHTML = '';
    for (const project of projects) {
      createProjectView(project);
      loadFiltersData(project);
    }
  } else {
    projectsElm.innerHTML = '<p>Nenhum projeto encontrado.</p>';
  }
}

function createProjectView(project) {
  const tags = project.topics.concat([
    project.subject + '-' + project.session,
    project.course + '-' + project.campus,
  ]);

  const view = `<div class="project">
    <a href="${project.repository}" target="_blank" class="project-image">
      <img src="img/projects/${project.preview}" alt="${project.title}">
    </a>
    <a href="${project.repository}" target="_blank" class="project-title">
      ${project.repository.replace('https://github.com/', '')}
    </a>
    <ul class="project-tags">
      ${tags.map(t => `<li>${t}</li>`).join('')}
    </ul>
  </div>`;

  projectsElm.insertAdjacentHTML('beforeend', view);
}

function sortFilters() {
  filters.topics = filters.topics.unique().sort();
  filters.subject = filters.subject.unique().sort();
  filters.session = filters.session.unique().sort();
  filters.course = filters.course.unique().sort();
  filters.campus = filters.campus.unique().sort();
}

function loadFiltersData(project) {
  filters.topics.push(...project.topics);
  filters.subject.push(project.subject);
  filters.session.push(project.session);
  filters.course.push(project.course);
  filters.campus.push(project.campus);
}

function loadFiltersView() {
  const fields = ['topics', 'subject', 'session', 'course', 'campus'];
  fields.forEach(f => {
    const filter = document.querySelector(`.${f}-filter .values`);
    filters[f].forEach(value => {
      const view = `<div class="value">
            <input type="checkbox" name="${f}" id="${value}" value="${`${f}-${value}`}"><label for="${value}">${value}</label>
          </div>`;
      filter.insertAdjacentHTML('beforeend', view);
    });
  });
  const checkboxes = Array.from(document.querySelectorAll('.value input[type=checkbox]'));
  checkboxes.forEach(c => c.addEventListener('change', () => filterProjects()));
}

function filterProjects() {
  const regexp = new RegExp(searchElm.value, 'i');
  const selected = Array.from(document.querySelectorAll('input:checked'));
  const filters = projects.filter(p => {
    return isFiltered(p, selected) && regexp.test(p.repository.replace('https://github.com/', ''));
  });
  createProjectsView(filters.length ? filters : selected.length ? filters : projects);
}

function isFiltered(project, selected) {
  return selected.every(s => {
    const field = s.value.split('-')[0];
    const value = s.value.split('-')[1];
    return project[field].includes(value);
  });
}
