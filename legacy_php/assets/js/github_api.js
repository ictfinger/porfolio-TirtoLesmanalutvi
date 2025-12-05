// GitHub API Configuration
const githubUsername = 'ictfinger'; // Change this to your GitHub username
const maxRepos = 6;

// Fetch GitHub Repositories
async function fetchGitHubRepos() {
    const container = document.getElementById('github-repos-container');
    const profileLink = document.getElementById('github-profile-link');

    if (!container) return;

    // Update profile link
    if (profileLink) {
        profileLink.href = `https://github.com/${githubUsername}`;
    }

    try {
        const response = await fetch(`https://api.github.com/users/${githubUsername}/repos?sort=updated&direction=desc`);
        if (!response.ok) throw new Error('Failed to fetch repositories');

        const repos = await response.json();
        const displayedRepos = repos.slice(0, maxRepos);

        container.innerHTML = displayedRepos.map(repo => `
            <div class="col-md-4">
                <a href="${repo.html_url}" target="_blank" class="text-decoration-none">
                    <div class="repo-card">
                        <div class="repo-name">
                            <i class="fab fa-github me-2"></i>${repo.name}
                        </div>
                        <div class="repo-desc">
                            ${repo.description || 'No description available.'}
                        </div>
                        <div class="repo-stats">
                            <span>
                                <span class="repo-lang" style="background-color: ${getLanguageColor(repo.language)}"></span>
                                ${repo.language || 'Code'}
                            </span>
                            <span>
                                <i class="fas fa-star"></i>${repo.stargazers_count}
                            </span>
                            <span>
                                <i class="fas fa-code-branch"></i>${repo.forks_count}
                            </span>
                        </div>
                    </div>
                </a>
            </div>
        `).join('');

    } catch (error) {
        console.error('Error fetching GitHub repos:', error);
        container.innerHTML = `
            <div class="col-12 text-center text-muted">
                <p>Failed to load repositories. Please check the username or try again later.</p>
            </div>
        `;
    }
}

// Helper to get color for languages
function getLanguageColor(language) {
    const colors = {
        'JavaScript': '#f1e05a',
        'Python': '#3572A5',
        'HTML': '#e34c26',
        'CSS': '#563d7c',
        'PHP': '#4F5D95',
        'Java': '#b07219',
        'TypeScript': '#2b7489',
        'Vue': '#41b883',
        'React': '#61dafb'
    };
    return colors[language] || '#8b9bb4';
}

// Initialize
document.addEventListener('DOMContentLoaded', () => {
    fetchGitHubRepos();
});
