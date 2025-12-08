// GitHub API configuration
const GITHUB_USERNAME = 'ictfinger';
const GITHUB_API_URL = `https://api.github.com/users/${GITHUB_USERNAME}/repos?sort=updated&per_page=6`;

// GitHub repository card template
function createRepoCard(repo) {
    const languageColor = getLanguageColor(repo.language);

    return `
        <div class="col-md-6 col-lg-4">
            <div class="repo-card">
                <div class="d-flex justify-content-between align-items-start mb-3">
                    <h5 class="fw-bold mb-0">${repo.name}</h5>
                    <a href="${repo.html_url}" target="_blank" class="text-primary">
                        <i class="fab fa-github"></i>
                    </a>
                </div>
                
                <p class="text-muted small mb-4">${repo.description || 'No description provided'}</p>
                
                <div class="d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center gap-3">
                        ${repo.language ? `
                            <div class="d-flex align-items-center">
                                <span class="repo-language" style="background-color: ${languageColor}"></span>
                                <small class="text-muted">${repo.language}</small>
                            </div>
                        ` : ''}
                        
                        <div class="d-flex align-items-center gap-1">
                            <i class="fas fa-star text-warning"></i>
                            <small class="text-muted">${repo.stargazers_count}</small>
                        </div>
                        
                        <div class="d-flex align-items-center gap-1">
                            <i class="fas fa-code-branch text-info"></i>
                            <small class="text-muted">${repo.forks_count}</small>
                        </div>
                    </div>
                    
                    <small class="text-muted">${formatDate(repo.updated_at)}</small>
                </div>
                
                <div class="mt-4">
                    <a href="${repo.html_url}" target="_blank" class="btn btn-sm btn-outline-primary w-100">
                        View Repository
                    </a>
                </div>
            </div>
        </div>
    `;
}

// Get language color
function getLanguageColor(language) {
    const colors = {
        'JavaScript': '#f1e05a',
        'TypeScript': '#2b7489',
        'Python': '#3572A5',
        'Java': '#b07219',
        'HTML': '#e34c26',
        'CSS': '#563d7c',
        'PHP': '#4F5D95',
        'Ruby': '#701516',
        'Go': '#00ADD8',
        'Rust': '#dea584',
        'C++': '#f34b7d',
        'C#': '#178600',
        'Swift': '#ffac45',
        'Kotlin': '#F18E33'
    };

    return colors[language] || '#6c757d';
}

// Format date
function formatDate(dateString) {
    const date = new Date(dateString);
    const now = new Date();
    const diffTime = Math.abs(now - date);
    const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));

    if (diffDays === 1) return 'Today';
    if (diffDays < 7) return `${diffDays} days ago`;
    if (diffDays < 30) return `${Math.floor(diffDays / 7)} weeks ago`;
    return `${Math.floor(diffDays / 30)} months ago`;
}

// Load GitHub repositories
async function loadGitHubRepos() {
    try {
        const container = document.getElementById('github-repos-container');

        const response = await fetch(GITHUB_API_URL);
        if (!response.ok) throw new Error('Failed to fetch repositories');

        const repos = await response.json();

        container.innerHTML = repos.map(createRepoCard).join('');

    } catch (error) {
        console.error('Error loading GitHub repositories:', error);
        const container = document.getElementById('github-repos-container');
        container.innerHTML = `
            <div class="col-12 text-center">
                <div class="alert alert-warning">
                    <i class="fas fa-exclamation-triangle me-2"></i>
                    Unable to load GitHub repositories. Please check your connection.
                </div>
            </div>
        `;
    }
}

// Initialize when page loads
document.addEventListener('DOMContentLoaded', loadGitHubRepos);