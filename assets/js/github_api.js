// GitHub API Integration
document.addEventListener('DOMContentLoaded', function () {
    const githubUsername = 'ictfinger'; // Ganti dengan username GitHub Anda
    const container = document.getElementById('github-repos-container');

    // Fallback data jika API gagal
    const fallbackProjects = [
        {
            name: "E-commerce Platform",
            description: "Full-featured online shopping platform with payment integration",
            technologies: ["React", "Node.js", "MongoDB", "Stripe"],
            demoUrl: "#",
            codeUrl: "#",
            image: "https://via.placeholder.com/400x250/1e293b/3b82f6?text=E-commerce"
        },
        {
            name: "Task Management App",
            description: "Productivity application with real-time collaboration features",
            technologies: ["Vue.js", "Express", "Socket.io", "PostgreSQL"],
            demoUrl: "#",
            codeUrl: "#",
            image: "https://via.placeholder.com/400x250/1e293b/3b82f6?text=Task+App"
        },
        {
            name: "Weather Dashboard",
            description: "Real-time weather information with interactive maps",
            technologies: ["JavaScript", "API", "Chart.js", "Bootstrap"],
            demoUrl: "#",
            codeUrl: "#",
            image: "https://via.placeholder.com/400x250/1e293b/3b82f6?text=Weather+App"
        }
    ];

    async function fetchGitHubRepos() {
        try {
            // Coba fetch dari GitHub API
            const response = await fetch(`https://api.github.com/users/${githubUsername}/repos?sort=updated&per_page=6`);

            if (!response.ok) {
                throw new Error('GitHub API request failed');
            }

            const repos = await response.json();
            displayProjects(repos);

        } catch (error) {
            console.log('Using fallback projects:', error);
            displayFallbackProjects();
        }
    }

    function displayProjects(repos) {
        if (!repos || repos.length === 0) {
            displayFallbackProjects();
            return;
        }

        container.innerHTML = '';

        repos.slice(0, 6).forEach(repo => {
            const col = document.createElement('div');
            col.className = 'col-md-6 col-lg-4';
            col.setAttribute('data-aos', 'fade-up');

            const languages = repo.language ? [repo.language] : ['JavaScript', 'HTML/CSS'];

            col.innerHTML = `
                <div class="project-card">
                    <img src="https://via.placeholder.com/400x250/1e293b/3b82f6?text=${encodeURIComponent(repo.name)}" 
                         alt="${repo.name}" 
                         class="project-img">
                    <div class="project-content">
                        <h4 class="fw-bold mb-2">${repo.name}</h4>
                        <p class="text-muted mb-3">${repo.description || 'No description available'}</p>
                        
                        <div class="project-tech mb-3">
                            ${languages.map(lang => `<span>${lang}</span>`).join('')}
                        </div>
                        
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted">
                                <i class="far fa-star me-1"></i> ${repo.stargazers_count || 0}
                            </small>
                            <div class="project-links">
                                <a href="${repo.html_url}" target="_blank" class="btn btn-sm btn-outline-primary">
                                    <i class="fab fa-github me-1"></i> Code
                                </a>
                                ${repo.homepage ?
                    `<a href="${repo.homepage}" target="_blank" class="btn btn-sm btn-primary">
                                        <i class="fas fa-external-link-alt me-1"></i> Demo
                                    </a>` : ''
                }
                            </div>
                        </div>
                    </div>
                </div>
            `;

            container.appendChild(col);
        });
    }

    function displayFallbackProjects() {
        container.innerHTML = '';

        fallbackProjects.forEach(project => {
            const col = document.createElement('div');
            col.className = 'col-md-6 col-lg-4';
            col.setAttribute('data-aos', 'fade-up');

            col.innerHTML = `
                <div class="project-card">
                    <img src="${project.image}" 
                         alt="${project.name}" 
                         class="project-img">
                    <div class="project-content">
                        <h4 class="fw-bold mb-2">${project.name}</h4>
                        <p class="text-muted mb-3">${project.description}</p>
                        
                        <div class="project-tech mb-3">
                            ${project.technologies.map(tech => `<span>${tech}</span>`).join('')}
                        </div>
                        
                        <div class="project-links">
                            <a href="${project.codeUrl}" target="_blank" class="btn btn-sm btn-outline-primary">
                                <i class="fab fa-github me-1"></i> View Code
                            </a>
                            <a href="${project.demoUrl}" target="_blank" class="btn btn-sm btn-primary">
                                <i class="fas fa-external-link-alt me-1"></i> Live Demo
                            </a>
                        </div>
                    </div>
                </div>
            `;

            container.appendChild(col);
        });
    }

    // Fetch GitHub repos on page load
    fetchGitHubRepos();
});