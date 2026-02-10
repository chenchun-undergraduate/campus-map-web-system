# campus-map-web-system
## Project Overview

This project is a full-stack web-based Campus Interactive Map System
designed to support user authentication, dynamic content delivery,
and data-driven user interaction.

The system integrates a browser-based frontend implemented with HTML,
CSS, JavaScript, and SVG-based interactive visualization, a PHP backend
for request handling and session management, and a MySQL relational
database for persistent data storage. The entire application was
deployed and tested in a local Apache (XAMPP) environment.

Rather than focusing on isolated algorithms, this project emphasizes
end-to-end system integration, interactive visualization, and
database-driven web application workflows.
## Motivation and Context

Many campus map systems primarily present static visual information
and offer limited interactivity, which reduces their flexibility and
practical usefulness.
This project was motivated by an interest in exploring how interactive
visualization, backend services, and structured data can be integrated
into a unified web-based application.

Campus maps provide a natural application context that combines
spatial information, user interaction, and data-driven content.
In this project, scalable vector graphics (SVG) were used to represent
campus buildings as interactive visual elements, enabling event-driven
user interaction and dynamic information rendering.
Through this system, the project examines how frontend visualization,
backend logic, and relational databases can work together within a
real-world web environment.
## System Architecture

The project follows a modular web-based architecture
that separates presentation, request handling, and layout logic.

Frontend HTML pages define the structure of user-facing views
and initiate requests based on user interaction.
Backend PHP services process these requests, manage application logic,
and handle communication with the underlying database.

CSS and client-side scripts are responsible for layout control,
visual presentation, and interactive behavior,
allowing frontend views and backend logic to remain loosely coupled.

Supporting resources such as images and map-related assets
are maintained in dedicated directories to support visualization，
and user interaction.

```text
CampusMap/
├── index.html                # Login entry page
├── campusMap.html            # Main interactive campus map (SVG-based)
├── BusinessFaculty.html      # Building detail page
├── GHKBuilding.html
├── ComprehensiveStadium.html
├── StudentLearning&ActivityCenter.html
│
├── style.css                 # Global UI styling
│
├── login.php                 # User authentication logic
├── signup.php                # User registration
├── logout.php                # Session termination
├── db.php                    # Database connection (PDO)
│
├── imgs/                     # UI images and assets
└── map/                      # SVG map files and related resources
、、、


## Key Features

- SVG-based interactive campus map with event-driven interaction
- Database-backed user authentication
- Dynamic content rendering based on user actions
- Modular separation between frontend and backend logic
## Data Design & Management

The system manages different categories of data based on their roles
within the application.

User authentication and session-related data are stored in a relational
MySQL database to ensure persistent storage and secure access control.
In contrast, descriptive information related to campus buildings is
embedded directly within frontend HTML and SVG components, as the content
is static and tightly coupled with visual presentation.

This separation reflects a design choice that balances simplicity
and functionality for the current system scope, while leaving open
the possibility of migrating presentation-level data to a database
or external data source in future extensions.
## Deployment and Testing

The application was deployed and tested in a local Apache (XAMPP)
environment.
End-to-end testing was conducted through HTTP-based access to ensure
correct PHP execution, database connectivity, and session handling.

Key user flows, including authentication and interactive map access,
were manually tested to verify system stability and functional correctness.
## Future Work

While the current system focuses on interactive visualization
and backend integration, it also serves as a foundation for
future applied artificial intelligence extensions.

One potential direction is to incorporate data-driven intelligence
into the existing architecture, such as analyzing user interaction
patterns to support personalized navigation or context-aware
information delivery.
Rather than treating AI as an isolated component, future work would
emphasize embedding intelligent behavior within a functioning
application system.

More broadly, this project reflects an interest in translating
theoretical concepts into practical, deployable systems.
Future development will continue to focus on bridging algorithmic
ideas with real-world applications, particularly in environments
that involve spatial information, user interaction, and system-level
integration.


