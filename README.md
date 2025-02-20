# Switch to Local/Staging

A WordPress plugin that simplifies switching between local and staging environments during development. This plugin adds a convenient button to your WordPress admin toolbar, allowing you to quickly toggle between your local and staging sites while maintaining the same page context.

## 🚀 Features

- One-click switching between local and staging environments
- Maintains the current page context when switching
- Easy configuration through WordPress admin interface
- Works in the WordPress admin toolbar (top bar)
- Preserves your current page path when switching environments

## 🎯 Use Case

Perfect for developers who:
- Work on local WordPress installations
- Need to frequently compare local changes with staging
- Want to quickly verify changes across environments
- Need to share staging URLs with clients or team members

## 📦 Installation

1. Download the plugin zip file
2. Go to WordPress admin > Plugins > Add New
3. Click "Upload Plugin" and select the downloaded zip file
4. Activate the plugin

## ⚙️ Configuration

1. Navigate to Settings > Switch Local/Staging in your WordPress admin
2. Enter your local development URL (e.g., `http://mysite.local`)
3. Enter your staging site URL (e.g., `https://staging.mysite.com`)
4. Save your settings

## 🔄 How It Works

Once configured, the plugin will:
1. Add a button to your WordPress admin toolbar
2. If you're on your local site, the button will say "Switch to Staging"
3. If you're on your staging site, the button will say "Switch to Local"
4. Clicking the button will open the same page you're currently viewing, but on the other environment

## 🛠️ Requirements

- WordPress 5.0 or higher
- Admin toolbar must be enabled
- Valid local and staging URLs configured

## 📝 License

This plugin is licensed under the GPL v3.

## 🤝 Contributing

Contributions are welcome! Feel free to:
1. Fork the repository
2. Create a feature branch
3. Submit a Pull Request

## 🐛 Bug Reports

Found a bug? Please create an issue in the GitHub repository with:
- A clear description of the issue
- Steps to reproduce
- Expected vs actual behavior
- WordPress version and other relevant details

## ✨ Future Enhancements

- User-customizable color-coded admin bar for easier identification of the current environment
- URL settings specific to the logged-in user
- Support for multiple environments (dev, staging, production)
- URL pattern matching for more flexible environment detection



---

Made with ❤️ for WordPress developers
