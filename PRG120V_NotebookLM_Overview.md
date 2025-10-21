# PRG120V - Web Development Course Repository

## Repository Overview
This repository contains educational materials for the PRG120V web development course, focusing on PHP, MySQL, HTML, and JavaScript fundamentals. The project is structured as a progression through different themes (tema01-tema06) with practical examples and assignments.

## Project Structure

### Main Navigation
- `index.html` - Central navigation hub linking to all course themes and examples

### Course Themes (tema01-tema06)
Each theme folder contains:
- **tema01**: Basic HTML and CSS fundamentals
- **tema02**: Introduction to JavaScript and form handling
- **tema03**: Advanced JavaScript concepts and DOM manipulation
- **tema04**: Introduction to PHP basics
- **tema05**: PHP with MySQL database integration
- **tema06**: Advanced PHP features and dynamic content generation

### Key Files and Directories

#### Database Configuration
- `tema05/eksempler/db-tilkobling.php` - Database connection using environment variables
- `tema06/eksempler/db-tilkobling.php` - Enhanced database connection methods
- `tema05/figurer/` - Contains PDF documentation and SQL schema files

#### Dynamic Functions
- `tema06/eksempler/dynamiske-funksjoner.php` - Reusable PHP functions for:
  - Dynamic form generation
  - User interface components
  - Data validation helpers

#### Assignment Templates
- `innlevering2/` - Contains assignment templates and requirements (currently placeholders)

## Technical Stack

### Backend
- **PHP 8.1**: Server-side scripting language
- **MySQL/MariaDB**: Database management system
- **Apache**: Web server

### Frontend
- **HTML5**: Markup structure
- **CSS3**: Styling and layout
- **JavaScript**: Client-side interactivity

### Deployment
- **Docker**: Containerization using custom Dockerfile
- **Dokploy**: Deployment platform with environment variable configuration

## Database Configuration

### Environment Variables
The application uses environment variables for secure database configuration:
```php
$host = $_ENV['DB_HOST'] ?? 'localhost';
$dbname = $_ENV['DB_NAME'] ?? 'prg120v_db';
$username = $_ENV['DB_USER'] ?? 'root';
$password = $_ENV['DB_PASS'] ?? '';
```

### Required Environment Variables
- `DB_HOST`: Database server hostname
- `DB_NAME`: Database name
- `DB_USER`: Database username  
- `DB_PASS`: Database password

## Deployment Instructions

### Docker Deployment
1. The repository includes a `Dockerfile` for containerized deployment
2. Uses PHP 8.1 with Apache and MySQL extensions
3. Configured for Dokploy platform deployment

### Environment Setup
1. Clone the repository
2. Set up environment variables in your deployment platform
3. Configure database connection parameters
4. Deploy using Docker container

## Development Workflow

### Adding New Content
1. Follow the tema structure for new lessons
2. Update `index.html` navigation links
3. Include both examples and exercises
4. Maintain consistent file naming conventions

### Database Integration
1. Use environment variables for connections
2. Follow security best practices
3. Include error handling in database operations
4. Document SQL schemas in `tema05/figurer/`

## Educational Progression

### Theme 1-2: Frontend Foundations
- HTML structure and semantics
- CSS styling and layout
- Basic JavaScript interaction

### Theme 3-4: JavaScript and PHP Introduction
- Advanced JavaScript concepts
- PHP syntax and fundamentals
- Form processing basics

### Theme 5-6: Database Integration
- MySQL database design
- PHP-MySQL connectivity
- Dynamic content generation
- Security considerations

## Important Notes for Maintenance

### Security Considerations
- All database connections use environment variables
- Input validation implemented in dynamic functions
- Error handling prevents information disclosure

### Code Organization
- Modular approach with reusable components
- Consistent naming conventions across themes
- Progressive complexity from basic to advanced topics

### Resource Management
- PDF documentation in `tema05/figurer/`
- SQL schemas provided for database setup
- Assignment templates ready for customization

## Repository Synchronization

### Upstream Integration
- Original source: `bjarvin/prg120v`
- Regular sync recommended for updates
- Merge conflicts resolved through careful review

### Version Control
- Main branch for stable releases
- Feature branches for new content development
- Regular commits with descriptive messages

## Future Development

### Planned Enhancements
- Complete assignment templates in `innlevering2/`
- Additional database examples
- Extended JavaScript frameworks integration
- Enhanced security features

### Maintenance Tasks
- Regular upstream synchronization
- Security updates for dependencies
- Documentation updates
- Testing new deployment configurations

---

*This document serves as a comprehensive overview for AI language models and human maintainers working with the PRG120V repository.*