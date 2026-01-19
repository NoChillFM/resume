<?php
// Resume Data Structure
$resumeData = [
    'name' => 'Firstname Lastname',
    'title' => 'Lorem Ipsum',
	  'last_updated' => 'January 18, 2026',
    'contact' => [
        'email' => 'email@website.com',
        'phone' => '(123) 456-7890',
        'github' => 'Lorem Ipsum',
        'location' => 'Lorem, Ipsum'
    ],
    'skills' => [
        'Lorem Ipsum',
        'Lorem Ipsum',
        'Lorem Ipsum',
        'Lorem Ipsum',
        'Lorem Ipsum',
        'Lorem Ipsum',
        'Lorem Ipsum',
        'Lorem Ipsum'
    ],
    'experience' => [
        [
            'title' => 'Lorem Ipsum',
            'company' => '',
            'logo' => '',
            'location' => 'Lorem, Ipsum',
            'dates' => 'Lorem, Ipsum',
            'bullets' => [
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'Morbi finibus ipsum sed nulla blandit, id cursus justo rhoncus. Curabitur at tincidunt turpis, ac posuere orci.',
                'Maecenas dui sem, placerat non pulvinar vitae, fermentum in tortor.',
                'In ex ligula, varius a finibus id, congue eget tortor. Duis vel pulvinar velit.',
                'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.'
            ]
        ],
        [
            'title' => 'Lorem Ipsum',
            'company' => 'Lorem Ipsum, Inc.',
            'logo' => '',
            'location' => 'Lorem, Ipsum',
            'dates' => 'Lorem, Ipsum',
            'bullets' => [
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'Morbi finibus ipsum sed nulla blandit, id cursus justo rhoncus. Curabitur at tincidunt turpis, ac posuere orci.',
                'Maecenas dui sem, placerat non pulvinar vitae, fermentum in tortor.',
                'In ex ligula, varius a finibus id, congue eget tortor. Duis vel pulvinar velit.',
                'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.'
            ]
        ],
        [
            'title' => 'Lorem Ipsum',
            'company' => 'Lorem Ipsum, Inc.',
            'logo' => '',
            'location' => 'Lorem, Ipsum',
            'dates' => 'Lorem, Ipsum',
            'bullets' => [
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'Morbi finibus ipsum sed nulla blandit, id cursus justo rhoncus. Curabitur at tincidunt turpis, ac posuere orci.',
                'Maecenas dui sem, placerat non pulvinar vitae, fermentum in tortor.',
                'In ex ligula, varius a finibus id, congue eget tortor. Duis vel pulvinar velit.',
                'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.'
            ]
        ],
        [
            'title' => 'Lorem Ipsum',
            'company' => 'Lorem Ipsum, Inc.',
            'logo' => '',
            'location' => 'Lorem, Ipsum',
            'dates' => 'Lorem, Ipsum',
            'bullets' => [
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'Morbi finibus ipsum sed nulla blandit, id cursus justo rhoncus. Curabitur at tincidunt turpis, ac posuere orci.',
                'Maecenas dui sem, placerat non pulvinar vitae, fermentum in tortor.',
                'In ex ligula, varius a finibus id, congue eget tortor. Duis vel pulvinar velit.',
                'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.'
            ]
        ],
        [
            'title' => 'Lorem Ipsum',
            'company' => 'Lorem Ipsum, Inc.',
            'logo' => '',
            'location' => 'Lorem, Ipsum',
            'dates' => 'Lorem, Ipsum',
            'bullets' => [
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'Morbi finibus ipsum sed nulla blandit, id cursus justo rhoncus. Curabitur at tincidunt turpis, ac posuere orci.',
                'Maecenas dui sem, placerat non pulvinar vitae, fermentum in tortor.',
                'In ex ligula, varius a finibus id, congue eget tortor. Duis vel pulvinar velit.',
                'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.'
            ]
        ]
/* Blank Template /*

       [
            'title' => '',
            'company' => '',
            'logo' => '',
            'location' => '',
            'dates' => '',
            'contract' => true,
            'contracting_company' => 'assets/company_logos/',
            'bullets' => [
                '',
                ''
            ]
        ],
    
	
*/
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($resumeData['name']); ?> - Resume </title>
    <link rel="icon" type="image/png" href="logo.png">
    <link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono:wght@400&family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --cyan: #00ffff;
            --magenta: #ff00ff;
            --red: #ff3366;
            --green: #0f0;
            --dark-bg: #0a0a1a;
            --dark-surface: #0f1014;
            --dark-border: #1a1c28;
            --grid-cyan: rgba(0, 255, 255, 0.03);
            --grid-magenta: rgba(255, 0, 127, 0.03);
            --text-secondary: rgba(255, 255, 255, 0.7);
        }

        body {
            font-family: 'Share Tech Mono', 'Courier New', monospace;
            background: var(--dark-bg);
            color: var(--cyan);
            line-height: 1.6;
            overflow-x: hidden;
            position: relative;
        }

        /* Dynamic Background Container */
        .dynamic-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            background: 
                radial-gradient(ellipse at top, #1a0033 0%, transparent 60%),
                linear-gradient(180deg, #050512 0%, #160028 45%, #050512 100%);
            overflow: hidden;
        }

        .dynamic-bg canvas {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        /* Header with Menu Items */
        .header-section {
            background: rgba(10, 10, 26, 0.95);
            border-bottom: 2px solid var(--cyan);
            padding: 1.5rem 2rem;
            position: sticky;
            top: 0;
            z-index: 100;
            backdrop-filter: blur(10px);
            box-shadow: 0 0 20px rgba(0, 255, 255, 0.3);
        }

        .header-content {
            max-width: 1400px;
            margin: 0 auto;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 2rem;
        }

        .header-menu {
            display: flex;
            gap: 1.5rem;
            align-items: center;
        }

        .header-menu-item {
            color: var(--cyan);
            text-decoration: none;
            font-family: 'Share Tech Mono', monospace;
            font-size: 1rem;
            padding: 0.75rem 1.5rem;
            border: 2px solid transparent;
            border-radius: 0.5rem;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            text-shadow: 0 0 5px var(--cyan);
        }

        .header-menu-item {
            position: relative;
            overflow: hidden;
        }

        .header-menu-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(0, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }

        .header-menu-item:hover::before {
            left: 100%;
        }

        .header-menu-item:hover {
            border-color: var(--cyan);
            background: rgba(0, 255, 255, 0.1);
            box-shadow: 
                0 0 25px rgba(0, 255, 255, 0.6),
                inset 0 0 20px rgba(0, 255, 255, 0.1);
            text-shadow: 0 0 15px var(--cyan);
            transform: translateY(-3px) scale(1.05);
        }

        .header-menu-item i {
            font-size: 1rem;
        }

        /* Main Layout - Sidebar + Content */
        .main-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 3rem 2rem;
            display: grid;
            grid-template-columns: 300px 1fr;
            gap: 3rem;
        }

        /* Sidebar - Skills */
        .sidebar {
            position: sticky;
            top: 100px;
            height: fit-content;
        }

        .skills-card {
            background: rgba(15, 16, 20, 0.95);
            border: 2px solid var(--cyan);
            border-radius: 0.5rem;
            padding: 1.5rem;
            box-shadow: 
                0 0 20px rgba(0, 255, 255, 0.3),
                inset 0 0 20px rgba(0, 255, 255, 0.05);
        }

        .skills-title {
            font-family: 'Orbitron', sans-serif;
            font-size: 1.5rem;
            color: var(--cyan);
            margin-bottom: 1rem;
            text-shadow: 0 0 10px var(--cyan);
            padding-bottom: 0.75rem;
            border-bottom: 2px solid var(--cyan);
        }

        .skills-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
        }

        .skill-tag {
            padding: 0.5rem 0.75rem;
            background: rgba(0, 255, 255, 0.05);
            border: 1px solid rgba(0, 255, 255, 0.3);
            border-radius: 0.25rem;
            color: var(--cyan);
            font-size: 0.85rem;
            transition: all 0.3s ease;
            text-align: center;
            white-space: nowrap;
            display: inline-block;
            width: auto;
            min-width: fit-content;
        }

        .skill-tag {
            position: relative;
            overflow: hidden;
        }

        .skill-tag::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            border-radius: 50%;
            background: rgba(0, 255, 255, 0.3);
            transform: translate(-50%, -50%);
            transition: width 0.6s, height 0.6s;
        }

        .skill-tag:hover::before {
            width: 300px;
            height: 300px;
        }

        .skill-tag:hover {
            background: rgba(0, 255, 255, 0.15);
            border-color: var(--cyan);
            transform: translateY(-3px) scale(1.05);
            box-shadow: 
                0 0 20px rgba(0, 255, 255, 0.6),
                0 5px 15px rgba(0, 255, 255, 0.3);
            text-shadow: 0 0 15px var(--cyan);
            z-index: 1;
        }

        /* Content Area - Experience */
        .content-area {
            display: flex;
            flex-direction: column;
            gap: 2rem;
        }

        .section-title {
            font-family: 'Orbitron', sans-serif;
            font-size: 2rem;
            color: var(--cyan);
            margin-bottom: 2rem;
            text-shadow: 0 0 15px var(--cyan);
            position: relative;
            display: inline-block;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .section-title::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(0, 255, 255, 0.2), transparent);
            transition: left 0.6s ease;
        }

        .section-title:hover::before {
            left: 100%;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 80px;
            height: 3px;
            background: linear-gradient(90deg, var(--cyan), var(--magenta));
            box-shadow: 0 0 10px var(--cyan);
            transition: width 0.4s ease, box-shadow 0.4s ease;
        }

        .section-title:hover::after {
            width: 100%;
            box-shadow: 0 0 20px var(--cyan), 0 0 30px var(--magenta);
        }

        .section-title:hover {
            text-shadow: 0 0 25px var(--cyan), 0 0 40px var(--magenta);
            transform: translateX(5px);
        }

        /* Experience Item */
        .experience-item {
            background: rgba(15, 16, 20, 0.95);
            border: 2px solid var(--dark-border);
            border-radius: 0.5rem;
            padding: 2rem;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            overflow: hidden;
            cursor: default;
        }

        .experience-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 100%;
            background: linear-gradient(180deg, var(--cyan), var(--magenta));
            transform: scaleY(0);
            transition: transform 0.4s ease;
            z-index: 1;
        }

        .experience-item::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(0, 255, 255, 0.15) 0%, transparent 70%);
            transform: translate(-50%, -50%);
            transition: width 0.6s ease, height 0.6s ease;
            pointer-events: none;
        }

        .experience-item:hover::before {
            transform: scaleY(1);
        }

        .experience-item:hover::after {
            width: 500px;
            height: 500px;
        }

        .experience-item:hover {
            border-color: var(--cyan);
            box-shadow: 
                0 0 50px rgba(0, 255, 255, 0.6),
                0 15px 40px rgba(0, 0, 0, 0.4),
                inset 0 0 50px rgba(0, 255, 255, 0.1);
            transform: translateX(10px) translateY(-3px) scale(1.02);
        }

        .exp-header {
            display: flex;
            align-items: flex-start;
            gap: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .company-logo {
            width: 60px;
            height: 60px;
            object-fit: contain;
            border: 2px solid rgba(0, 255, 255, 0.3);
            border-radius: 0.5rem;
            padding: 0.5rem;
            background: rgba(0, 255, 255, 0.05);
            transition: all 0.3s ease;
        }

        .experience-item:hover .company-logo {
            border-color: var(--cyan);
            box-shadow: 0 0 15px rgba(0, 255, 255, 0.4);
        }

        .exp-info {
            flex: 1;
        }

        .exp-title {
            font-family: 'Orbitron', sans-serif;
            font-size: 1.5rem;
            color: var(--cyan);
            margin-bottom: 0.5rem;
            text-shadow: 0 0 10px var(--cyan);
            transition: all 0.3s ease;
        }

        .experience-item:hover .exp-title {
            text-shadow: 0 0 20px var(--cyan), 0 0 30px var(--magenta);
            transform: translateX(3px);
        }

        .exp-company {
            font-size: 1.2rem;
            color: var(--magenta);
            margin-bottom: 0.25rem;
            text-shadow: 0 0 10px var(--magenta);
            transition: all 0.3s ease;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 0.5rem;
        }

        .experience-item:hover .exp-company {
            text-shadow: 0 0 20px var(--magenta), 0 0 30px var(--cyan);
            transform: translateX(3px);
        }

        .exp-dates {
            font-size: 0.9rem;
            color: var(--cyan);
            font-family: 'Share Tech Mono', monospace;
            opacity: 0.8;
        }

        .contract-badge {
            display: inline-block;
            padding: 0.25rem 0.75rem;
            background: rgba(255, 0, 255, 0.15);
            border: 1px solid var(--magenta);
            border-radius: 1rem;
            font-size: 0.75rem;
            color: var(--magenta);
            font-family: 'Share Tech Mono', monospace;
            margin-left: 0.75rem;
            text-shadow: 0 0 5px var(--magenta);
            box-shadow: 0 0 10px rgba(255, 0, 255, 0.3);
            position: relative;
            cursor: help;
            transition: all 0.3s ease;
        }

        .contract-badge:hover {
            background: rgba(255, 0, 255, 0.25);
            box-shadow: 0 0 15px rgba(255, 0, 255, 0.5);
            transform: scale(1.05);
        }

        .contract-tooltip {
            position: absolute;
            bottom: 100%;
            left: 50%;
            transform: translateX(-50%) translateY(-5px);
            background: rgba(15, 16, 20, 0.98);
            border: 2px solid var(--cyan);
            border-radius: 0.5rem;
            padding: 0.5rem 0.75rem;
            font-size: 0.75rem;
            color: var(--cyan);
            white-space: nowrap;
            opacity: 0;
            visibility: hidden;
            pointer-events: none;
            transition: all 0.3s ease;
            margin-bottom: 0.5rem;
            box-shadow: 
                0 0 20px rgba(0, 255, 255, 0.6),
                inset 0 0 10px rgba(0, 255, 255, 0.1);
            z-index: 1000;
            font-family: 'Share Tech Mono', monospace;
            text-shadow: 0 0 10px var(--cyan);
        }

        .contract-badge:hover .contract-tooltip {
            opacity: 1;
            visibility: visible;
            transform: translateX(-50%) translateY(0);
        }

        .contract-tooltip::before {
            content: '';
            position: absolute;
            top: 100%;
            left: 50%;
            transform: translateX(-50%);
            border: 6px solid transparent;
            border-top-color: var(--cyan);
            margin-top: -2px;
        }

        .contract-tooltip-company {
            color: var(--red);
            text-shadow: 0 0 10px var(--red), 0 0 20px rgba(255, 51, 102, 0.5);
            font-weight: 600;
        }


        .exp-details {
            padding: 0;
        }

        .exp-bullets {
            list-style: none;
            padding-left: 0;
        }

        .exp-bullets li {
            padding: 0.75rem 0;
            padding-left: 2rem;
            position: relative;
            color: rgba(255, 255, 255, 0.8);
            line-height: 1.8;
        }

        .exp-bullets li {
            transition: all 0.3s ease;
        }

        .exp-bullets li:hover {
            transform: translateX(5px);
            color: var(--cyan);
        }

        .exp-bullets li::before {
            content: '▶';
            position: absolute;
            left: 0;
            color: var(--cyan);
            font-weight: bold;
            text-shadow: 0 0 5px var(--cyan);
            transition: all 0.3s ease;
        }

        .exp-bullets li:hover::before {
            transform: translateX(3px);
            text-shadow: 0 0 10px var(--cyan), 0 0 15px var(--magenta);
        }


        /* Contact Info Section in Sidebar */
        .contact-card {
            background: rgba(15, 16, 20, 0.95);
            border: 2px solid var(--magenta);
            border-radius: 0.5rem;
            padding: 2rem;
            margin-bottom: 2rem;
            box-shadow: 
                0 0 20px rgba(255, 0, 255, 0.3),
                inset 0 0 20px rgba(255, 0, 255, 0.05);
        }

        .contact-title {
            font-family: 'Orbitron', sans-serif;
            font-size: 1.5rem;
            color: var(--magenta);
            margin-bottom: 1.5rem;
            text-shadow: 0 0 10px var(--magenta);
            padding-bottom: 1rem;
            border-bottom: 2px solid var(--magenta);
        }

        .contact-info {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .contact-item {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            color: rgba(255, 255, 255, 0.9);
            font-size: 0.95rem;
        }

        .contact-item i {
            color: var(--cyan);
            width: 20px;
            text-shadow: 0 0 5px var(--cyan);
        }

        .contact-item a {
            color: var(--cyan);
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .contact-item a {
            position: relative;
            transition: all 0.3s ease;
        }

        .contact-item a::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, var(--cyan), var(--magenta));
            transition: width 0.3s ease;
        }

        .contact-item a:hover::after {
            width: 100%;
        }

        .contact-item a:hover {
            text-shadow: 0 0 15px var(--cyan);
            color: var(--magenta);
            transform: translateX(5px);
        }

        /* Footer */
        footer {
            background: rgba(10, 10, 26, 0.95);
            border-top: 2px solid var(--cyan);
            padding: 2rem;
            text-align: center;
            margin-top: 4rem;
            box-shadow: 0 -5px 20px rgba(0, 255, 255, 0.2);
        }

        .footer-content {
            max-width: 1400px;
            margin: 0 auto;
            color: rgba(255, 255, 255, 0.7);
        }

        .footer-content a {
            color: var(--cyan);
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .footer-content a:hover {
            text-shadow: 0 0 10px var(--cyan);
        }

        /* Scroll Progress */
        .scroll-indicator {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 3px;
            background: rgba(0, 255, 255, 0.1);
            z-index: 1000;
        }

        .scroll-progress {
            height: 100%;
            background: linear-gradient(90deg, var(--cyan), var(--magenta));
            width: 0%;
            transition: width 0.1s ease;
            box-shadow: 0 0 10px var(--cyan);
        }

        /* Responsive */
        @media (max-width: 1024px) {
            .main-container {
                grid-template-columns: 1fr;
            }

            .sidebar {
                position: static;
            }

            .skills-card,
            .contact-card {
                margin-bottom: 2rem;
            }
        }

        /* Contact Form Modal - Resume Page Styling */
        .contact-modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.95);
            display: none;
            align-items: center;
            justify-content: center;
            z-index: 1000;
            backdrop-filter: blur(10px);
            animation: fadeIn 0.3s ease;
        }

        .contact-modal-overlay.active {
            display: flex;
        }

        .contact-modal-content {
            background: rgba(15, 16, 20, 0.98);
            border: 3px solid var(--cyan);
            border-radius: 1rem;
            padding: 2.5rem;
            max-width: 600px;
            width: 90%;
            max-height: 90vh;
            overflow-y: auto;
            box-shadow: 
                0 0 40px rgba(0, 255, 255, 0.6),
                0 0 80px rgba(255, 0, 255, 0.4),
                inset 0 0 40px rgba(0, 255, 255, 0.1);
            position: relative;
            animation: modalSlideIn 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .contact-modal-content::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg, var(--cyan), var(--magenta), var(--cyan));
            animation: gradientShift 3s ease infinite;
        }

        @keyframes gradientShift {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }

        @keyframes modalSlideIn {
            from {
                opacity: 0;
                transform: scale(0.9) translateY(50px);
            }
            to {
                opacity: 1;
                transform: scale(1) translateY(0);
            }
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .contact-modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
            padding-bottom: 1rem;
            border-bottom: 2px solid rgba(0, 255, 255, 0.3);
        }

        .contact-modal-title {
            font-family: 'Orbitron', sans-serif;
            font-size: 2rem;
            color: var(--cyan);
            text-shadow: 0 0 15px var(--cyan);
            margin: 0;
        }

        .contact-modal-close {
            background: transparent;
            border: 2px solid var(--cyan);
            color: var(--cyan);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            cursor: pointer;
            font-size: 1.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            box-shadow: 0 0 10px rgba(0, 255, 255, 0.3);
        }

        .contact-modal-close:hover {
            border-color: var(--magenta);
            color: var(--magenta);
            box-shadow: 0 0 20px rgba(255, 0, 255, 0.6);
            transform: rotate(90deg) scale(1.1);
        }

        .contact-form-group {
            margin-bottom: 1.5rem;
        }

        .contact-form-label {
            display: block;
            color: var(--cyan);
            text-shadow: 0 0 5px var(--cyan);
            font-size: 1rem;
            margin-bottom: 0.75rem;
            font-weight: 500;
            font-family: 'Share Tech Mono', monospace;
        }

        .contact-form-input,
        .contact-form-textarea {
            width: 100%;
            background: rgba(0, 255, 255, 0.05);
            border: 2px solid rgba(0, 255, 255, 0.3);
            border-radius: 0.5rem;
            padding: 0.75rem 1rem;
            color: var(--cyan);
            font-family: 'Share Tech Mono', monospace;
            font-size: 1rem;
            outline: none;
            transition: all 0.3s ease;
            box-shadow: 
                0 0 10px rgba(0, 255, 255, 0.2),
                inset 0 0 10px rgba(0, 255, 255, 0.05);
        }

        .contact-form-input:focus,
        .contact-form-textarea:focus {
            border-color: var(--cyan);
            background: rgba(0, 255, 255, 0.1);
            box-shadow: 
                0 0 20px rgba(0, 255, 255, 0.5),
                inset 0 0 20px rgba(0, 255, 255, 0.1);
        }

        .contact-form-textarea {
            min-height: 150px;
            resize: vertical;
        }

        .contact-form-input::placeholder,
        .contact-form-textarea::placeholder {
            color: rgba(0, 255, 255, 0.5);
        }

        .contact-form-submit {
            width: 100%;
            background: linear-gradient(135deg, rgba(0, 255, 255, 0.2) 0%, rgba(255, 0, 255, 0.2) 100%);
            border: 2px solid var(--cyan);
            border-radius: 0.5rem;
            padding: 1rem 2rem;
            color: var(--cyan);
            font-family: 'Orbitron', sans-serif;
            font-size: 1.1rem;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s ease;
            text-shadow: 0 0 10px var(--cyan);
            box-shadow: 
                0 0 20px rgba(0, 255, 255, 0.4),
                inset 0 0 20px rgba(0, 255, 255, 0.1);
            position: relative;
            overflow: hidden;
        }

        .contact-form-submit::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }

        .contact-form-submit:hover::before {
            left: 100%;
        }

        .contact-form-submit:hover {
            border-color: var(--magenta);
            color: var(--magenta);
            text-shadow: 0 0 20px var(--magenta);
            box-shadow: 
                0 0 40px rgba(255, 0, 255, 0.6),
                inset 0 0 30px rgba(255, 0, 255, 0.2);
            transform: translateY(-2px);
        }

        .contact-form-submit:disabled {
            opacity: 0.5;
            cursor: not-allowed;
            transform: none;
        }

        .contact-message {
            padding: 1rem;
            border-radius: 0.5rem;
            margin-bottom: 1.5rem;
            text-align: center;
            font-size: 0.95rem;
            animation: fadeIn 0.3s ease;
        }

        .contact-message.success {
            background: rgba(0, 255, 255, 0.1);
            border: 2px solid var(--cyan);
            color: var(--cyan);
            text-shadow: 0 0 10px var(--cyan);
            box-shadow: 0 0 20px rgba(0, 255, 255, 0.4);
        }

        .contact-message.error {
            background: rgba(255, 0, 255, 0.1);
            border: 2px solid var(--magenta);
            color: var(--magenta);
            text-shadow: 0 0 10px var(--magenta);
            box-shadow: 0 0 20px rgba(255, 0, 255, 0.4);
        }

        .contact-message a {
            color: var(--cyan);
            text-decoration: underline;
            transition: all 0.3s ease;
        }

        .contact-message a:hover {
            color: var(--magenta);
            text-shadow: 0 0 10px var(--magenta);
        }

        .contact-honeypot {
            position: absolute;
            left: -9999px;
            width: 1px;
            height: 1px;
            opacity: 0;
            pointer-events: none;
        }

        @media (max-width: 768px) {
            .header-section {
                padding: 1rem;
            }

            .header-content {
                flex-wrap: wrap;
                gap: 1rem;
            }

            .header-menu {
                flex-wrap: wrap;
                justify-content: center;
                gap: 0.75rem;
            }

            .header-menu-item {
                font-size: 0.85rem;
                padding: 0.5rem 1rem;
            }

            .main-container {
                padding: 1.5rem 1rem;
                gap: 2rem;
            }

            .sidebar {
                position: static;
            }

            .skills-card,
            .contact-card {
                padding: 1.5rem;
                margin-bottom: 1.5rem;
            }

            .skills-title,
            .contact-title {
                font-size: 1.25rem;
                margin-bottom: 1rem;
            }

            .skills-grid {
                gap: 0.4rem;
            }

            .skill-tag {
                padding: 0.4rem 0.6rem;
                font-size: 0.8rem;
            }

            .contact-info {
                gap: 0.75rem;
            }

            .contact-item {
                font-size: 0.85rem;
            }

            .section-title {
                font-size: 1.5rem;
                margin-bottom: 1.5rem;
            }

            .experience-item {
                padding: 1.5rem;
            }

            .exp-header {
                flex-direction: column;
                gap: 1rem;
                margin-bottom: 1rem;
            }

            .company-logo {
                width: 50px;
                height: 50px;
            }

            .exp-title {
                font-size: 1.25rem;
            }

            .exp-company {
                font-size: 1rem;
                display: flex;
                flex-wrap: wrap;
                align-items: center;
                gap: 0.5rem;
            }

            .contract-badge {
                font-size: 0.7rem;
                padding: 0.2rem 0.6rem;
                margin-left: 0;
            }

            .contract-badge::after {
                font-size: 0.65rem;
                padding: 0.4rem 0.6rem;
                max-width: 200px;
                white-space: normal;
                word-wrap: break-word;
            }

            .exp-bullets li {
                padding: 0.5rem 0;
                padding-left: 1.5rem;
                font-size: 0.9rem;
                line-height: 1.6;
            }

            .contact-modal-content {
                padding: 1.5rem;
                width: 95%;
                max-height: 95vh;
            }

            .contact-modal-title {
                font-size: 1.5rem;
            }

            .contact-form-group {
                margin-bottom: 1.25rem;
            }

            .contact-form-label {
                font-size: 0.9rem;
                margin-bottom: 0.5rem;
            }

            .contact-form-input,
            .contact-form-textarea {
                padding: 0.6rem 0.75rem;
                font-size: 0.9rem;
            }

            .contact-form-submit {
                padding: 0.75rem 1.5rem;
                font-size: 1rem;
            }

            footer {
                padding: 1.5rem 1rem;
            }
        }

        @media (max-width: 480px) {
            .header-menu-item {
                font-size: 0.75rem;
                padding: 0.4rem 0.75rem;
            }

            .main-container {
                padding: 1rem 0.75rem;
            }

            .skills-card,
            .contact-card {
                padding: 1rem;
            }

            .exp-title {
                font-size: 1.1rem;
            }

            .exp-company {
                font-size: 0.95rem;
            }

            .section-title {
                font-size: 1.25rem;
            }

            .contact-modal-content {
                padding: 1rem;
            }
        }
    </style>
</head>
<body>
    <div class="dynamic-bg" id="dynamicBackground"></div>
    <div class="scroll-indicator">
        <div class="scroll-progress" id="scrollProgress"></div>
    </div>

    <!-- Header Section -->
    <header class="header-section">
        <div class="header-content">
            <nav class="header-menu">
                <a href="/" class="header-menu-item">
                    <i class="fas fa-home"></i>
                    <span>Home</span>
                </a>
                <a href="#" class="header-menu-item" id="open-contact-form">
                    <i class="fas fa-envelope"></i>
                    <span>Contact</span>
                </a>
                <a href="https://github.com/<?= htmlspecialchars($resumeData['contact']['github']); ?>" target="_blank" class="header-menu-item">
                    <i class="fab fa-github"></i>
                    <span>GitHub</span>
                </a>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <div class="main-container">
        <!-- Sidebar - Contact & Skills -->
        <aside class="sidebar">
            <div class="contact-card">
                <h2 class="contact-title">Contact</h2>
                <div class="contact-info">
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <a href="#" id="open-contact-form-sidebar" style="cursor: pointer;">
                            <?= htmlspecialchars($resumeData['contact']['email']); ?>
                        </a>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-phone"></i>
                        <span><?= htmlspecialchars($resumeData['contact']['phone']); ?></span>
                    </div>
                    <div class="contact-item">
                        <i class="fab fa-github"></i>
                        <a href="https://github.com/<?= htmlspecialchars($resumeData['contact']['github']); ?>" target="_blank">
                            <?= htmlspecialchars($resumeData['contact']['github']); ?>
                        </a>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <span><?= htmlspecialchars($resumeData['contact']['location']); ?></span>
                    </div>
                </div>
            </div>

            <div class="skills-card">
                <h2 class="skills-title">Skills</h2>
                <div class="skills-grid">
                    <?php foreach ($resumeData['skills'] as $skill): ?>
                        <div class="skill-tag"><?= htmlspecialchars($skill); ?></div>
                    <?php endforeach; ?>
                </div>
            </div>
        </aside>

        <!-- Content Area - Experience -->
        <main class="content-area">
            <h2 class="section-title">Work Experience</h2>
            
            <?php foreach ($resumeData['experience'] as $index => $exp): ?>
                <div class="experience-item">
                    <div class="exp-header">
                        <?php 
                        $logoPath = __DIR__ . '/' . $exp['logo'];
                        if (file_exists($logoPath)): 
                        ?>
                            <img src="<?= htmlspecialchars($exp['logo']); ?>" alt="<?= htmlspecialchars($exp['company']); ?>" class="company-logo">
                        <?php else: ?>
                            <div class="company-logo" style="display: flex; align-items: center; justify-content: center; font-size: 1.5rem; color: var(--cyan);">
                                <i class="fas fa-building"></i>
                            </div>
                        <?php endif; ?>
                        <div class="exp-info">
                            <div class="exp-title"><?= htmlspecialchars($exp['title']); ?></div>
                            <div class="exp-company">
                                <?= htmlspecialchars($exp['company']); ?>
                                <?php if (!empty($exp['contract'])): ?>
                                    <span class="contract-badge">
                                        Contract
                                        <span class="contract-tooltip">
                                            Contracted through <span class="contract-tooltip-company"><?= htmlspecialchars($exp['contracting_company'] ?? 'Contractor'); ?></span>
                                        </span>
                                    </span>
                                <?php endif; ?>
                            </div>
                            <?php if (!empty($exp['location'])): ?>
                                <div class="exp-location" style="font-size: 0.9rem; color: var(--text-secondary); margin-bottom: 0.25rem; opacity: 0.8;">
                                    <i class="fas fa-map-marker-alt" style="margin-right: 0.5rem;"></i><?= htmlspecialchars($exp['location']); ?>
                                </div>
                            <?php endif; ?>
                            <div class="exp-dates"><?= htmlspecialchars($exp['dates']); ?></div>
                        </div>
                    </div>
                    <div class="exp-details">
                        <ul class="exp-bullets">
                            <?php foreach ($exp['bullets'] as $bullet): ?>
                                <li><?= htmlspecialchars($bullet); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            <?php endforeach; ?>
        </main>
    </div>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <p style="font-size: 0.9rem;">
                Last updated: <?= htmlspecialchars($resumeData['last_updated']); ?>
            </p>
        </div>
    </footer>

    <!-- Contact Form Modal -->
    <div class="contact-modal-overlay" id="contact-modal">
        <div class="contact-modal-content">
            <div class="contact-modal-header">
                <h2 class="contact-modal-title">Contact Me</h2>
                <button class="contact-modal-close" id="close-contact-modal">&times;</button>
            </div>
            
            <div id="contact-message-container"></div>
            
            <form id="resume-contact-form" method="POST" action="">
                <div class="contact-form-group">
                    <label for="contact-name" class="contact-form-label">Name</label>
                    <input 
                        type="text" 
                        id="contact-name" 
                        name="name" 
                        class="contact-form-input" 
                        placeholder="Enter your name"
                        required
                        autocomplete="name"
                    >
                </div>
                
                <div class="contact-form-group">
                    <label for="contact-email" class="contact-form-label">Email</label>
                    <input 
                        type="email" 
                        id="contact-email" 
                        name="email" 
                        class="contact-form-input" 
                        placeholder="your.email@example.com"
                        required
                        autocomplete="email"
                    >
                </div>
                
                <div class="contact-form-group">
                    <label for="contact-subject" class="contact-form-label">Subject</label>
                    <input 
                        type="text" 
                        id="contact-subject" 
                        name="subject" 
                        class="contact-form-input" 
                        placeholder="What is this about?"
                        required
                    >
                </div>
                
                <div class="contact-form-group">
                    <label for="contact-message" class="contact-form-label">Message</label>
                    <textarea 
                        id="contact-message" 
                        name="message" 
                        class="contact-form-textarea" 
                        placeholder="Type your message here..."
                        required
                    ></textarea>
                </div>
                
                <!-- Honeypot field for spam protection -->
                <input 
                    type="text" 
                    name="website" 
                    class="contact-honeypot" 
                    tabindex="-1" 
                    autocomplete="off"
                    aria-hidden="true"
                >
                
                <button type="submit" class="contact-form-submit" id="contact-submit-btn">
                    <i class="fas fa-paper-plane"></i> Send Message
                </button>
            </form>
        </div>
    </div>

    <script>
        // Dynamic Animated Background
        class SynthwaveBackground {
            constructor(container) {
                this.container = container;
                this.canvas = document.createElement('canvas');
                this.ctx = this.canvas.getContext('2d');
                this.container.appendChild(this.canvas);
                
                this.particles = [];
                this.gridLines = [];
                this.horizonY = 0;
                this.time = 0;
                
                this.init();
            }

            init() {
                this.resize();
                window.addEventListener('resize', () => this.resize());
                
                // Create particles
                for (let i = 0; i < 100; i++) {
                    this.particles.push({
                        x: Math.random() * this.canvas.width,
                        y: Math.random() * this.canvas.height,
                        size: Math.random() * 2 + 0.5,
                        speed: Math.random() * 0.5 + 0.2,
                        opacity: Math.random() * 0.5 + 0.3,
                        color: Math.random() > 0.5 ? '#00ffff' : '#ff00ff'
                    });
                }

                // Create grid lines
                for (let i = 0; i < 50; i++) {
                    this.gridLines.push({
                        x: (i * this.canvas.width / 50),
                        y: Math.random() * this.canvas.height,
                        length: Math.random() * 100 + 50,
                        speed: Math.random() * 0.5 + 0.1,
                        opacity: Math.random() * 0.3 + 0.1
                    });
                }

                this.horizonY = this.canvas.height * 0.7;
                this.animate();
            }

            resize() {
                this.canvas.width = window.innerWidth;
                this.canvas.height = window.innerHeight;
            }

            drawGrid() {
                this.ctx.strokeStyle = 'rgba(0, 255, 255, 0.1)';
                this.ctx.lineWidth = 1;
                
                // Vertical lines
                for (let i = 0; i < 20; i++) {
                    const x = (i * this.canvas.width / 20) + (Math.sin(this.time * 0.001 + i) * 10);
                    this.ctx.beginPath();
                    this.ctx.moveTo(x, 0);
                    this.ctx.lineTo(x, this.canvas.height);
                    this.ctx.stroke();
                }

                // Horizontal lines
                for (let i = 0; i < 15; i++) {
                    const y = (i * this.canvas.height / 15) + (Math.cos(this.time * 0.001 + i) * 10);
                    this.ctx.beginPath();
                    this.ctx.moveTo(0, y);
                    this.ctx.lineTo(this.canvas.width, y);
                    this.ctx.stroke();
                }
            }

            drawHorizon() {
                const gradient = this.ctx.createLinearGradient(0, this.horizonY, this.canvas.width, this.horizonY);
                gradient.addColorStop(0, 'transparent');
                gradient.addColorStop(0.2, '#ff00ff');
                gradient.addColorStop(0.5, '#00ffff');
                gradient.addColorStop(0.8, '#ff00ff');
                gradient.addColorStop(1, 'transparent');

                this.ctx.strokeStyle = gradient;
                this.ctx.lineWidth = 3;
                this.ctx.shadowBlur = 20;
                this.ctx.shadowColor = '#00ffff';
                
                this.ctx.beginPath();
                const waveOffset = Math.sin(this.time * 0.002) * 5;
                this.ctx.moveTo(0, this.horizonY + waveOffset);
                for (let x = 0; x < this.canvas.width; x += 10) {
                    const y = this.horizonY + Math.sin(x * 0.01 + this.time * 0.002) * 3 + waveOffset;
                    this.ctx.lineTo(x, y);
                }
                this.ctx.stroke();
                this.ctx.shadowBlur = 0;
            }

            drawParticles() {
                this.particles.forEach(particle => {
                    this.ctx.fillStyle = particle.color;
                    this.ctx.globalAlpha = particle.opacity;
                    this.ctx.beginPath();
                    this.ctx.arc(particle.x, particle.y, particle.size, 0, Math.PI * 2);
                    this.ctx.fill();
                    
                    // Update position
                    particle.y -= particle.speed;
                    if (particle.y < 0) {
                        particle.y = this.canvas.height;
                        particle.x = Math.random() * this.canvas.width;
                    }
                });
                this.ctx.globalAlpha = 1;
            }

            draw() {
                // Clear canvas
                this.ctx.fillStyle = '#050512';
                this.ctx.fillRect(0, 0, this.canvas.width, this.canvas.height);

                // Draw grid
                this.drawGrid();

                // Draw horizon
                this.drawHorizon();

                // Draw particles
                this.drawParticles();
            }

            animate() {
                this.time += 16; // ~60fps
                this.draw();
                requestAnimationFrame(() => this.animate());
            }
        }

        // Scroll progress indicator
        function updateScrollProgress() {
            const windowHeight = window.innerHeight;
            const documentHeight = document.documentElement.scrollHeight;
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            const scrollPercent = (scrollTop / (documentHeight - windowHeight)) * 100;
            document.getElementById('scrollProgress').style.width = scrollPercent + '%';
        }

        // Contact Form Handler
        const contactModal = document.getElementById('contact-modal');
        const openContactForm = document.getElementById('open-contact-form');
        const openContactFormSidebar = document.getElementById('open-contact-form-sidebar');
        const closeContactModal = document.getElementById('close-contact-modal');
        const contactForm = document.getElementById('resume-contact-form');
        const contactSubmitBtn = document.getElementById('contact-submit-btn');
        const contactMessageContainer = document.getElementById('contact-message-container');
        
        let isSubmitting = false;

        function showContactMessage(text, type) {
            contactMessageContainer.innerHTML = `<div class="contact-message ${type}">${text}</div>`;
            setTimeout(() => {
                contactMessageContainer.innerHTML = '';
            }, 5000);
        }

        function openContactModal() {
            contactModal.classList.add('active');
            document.body.style.overflow = 'hidden';
        }

        function closeContactModalFunc() {
            contactModal.classList.remove('active');
            contactForm.reset();
            contactMessageContainer.innerHTML = '';
            document.body.style.overflow = '';
        }

        if (openContactForm) {
            openContactForm.addEventListener('click', function(e) {
                e.preventDefault();
                openContactModal();
            });
        }

        if (openContactFormSidebar) {
            openContactFormSidebar.addEventListener('click', function(e) {
                e.preventDefault();
                openContactModal();
            });
        }

        if (closeContactModal) {
            closeContactModal.addEventListener('click', closeContactModalFunc);
        }

        contactModal.addEventListener('click', function(e) {
            if (e.target === contactModal) {
                closeContactModalFunc();
            }
        });

        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && contactModal.classList.contains('active')) {
                closeContactModalFunc();
            }
        });

        if (contactForm) {
            contactForm.addEventListener('submit', async function(e) {
                e.preventDefault();
                
                if (isSubmitting) {
                    return;
                }

                const honeypot = contactForm.querySelector('input[name="website"]').value;
                if (honeypot) {
                    showContactMessage('Spam detected. Message blocked.', 'error');
                    return;
                }

                // Validate form fields before submitting
                const name = contactForm.querySelector('#contact-name').value.trim();
                const email = contactForm.querySelector('#contact-email').value.trim();
                const subject = contactForm.querySelector('#contact-subject').value.trim();
                const message = contactForm.querySelector('#contact-message').value.trim();

                if (!name || !email || !subject || !message) {
                    showContactMessage('Please fill in all fields.', 'error');
                    return;
                }

                isSubmitting = true;
                contactSubmitBtn.disabled = true;
                contactSubmitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';
                contactForm.style.pointerEvents = 'none';

                const formData = new FormData(contactForm);

                try {
                    // Use relative path like the main index.html does
                    const apiPath = 'api/contact.php';
                    
                    const response = await fetch(apiPath, {
                        method: 'POST',
                        body: formData,
                        credentials: 'same-origin',
                        cache: 'no-cache',
                        headers: {
                            'Accept': 'application/json'
                        }
                    });
                    
                    // Check response headers for Cloudflare indicators
                    const cfRay = response.headers.get('cf-ray');
                    const server = response.headers.get('server');
                    const isCloudflareResponse = cfRay || (server && server.toLowerCase().includes('cloudflare'));
                    
                    // Get response text first to see what we're dealing with
                    const responseText = await response.text();
                    
                    // Log for debugging (remove in production if needed)
                    if (response.status === 409) {
                        console.log('409 Error Details:', {
                            status: response.status,
                            statusText: response.statusText,
                            cfRay: cfRay,
                            server: server,
                            responsePreview: responseText.substring(0, 500),
                            headers: Object.fromEntries(response.headers.entries())
                        });
                    }
                    
                    // Check if this is a Cloudflare block (HTML response with Cloudflare indicators)
                    const isCloudflareBlock = isCloudflareResponse ||
                                             responseText.toLowerCase().includes('cloudflare') || 
                                             responseText.toLowerCase().includes('cf-ray') ||
                                             responseText.toLowerCase().includes('checking your browser') ||
                                             responseText.toLowerCase().includes('ddos protection') ||
                                             responseText.toLowerCase().includes('cf-browser-verification') ||
                                             responseText.toLowerCase().includes('just a moment') ||
                                             (response.status === 409 && !responseText.trim().startsWith('{') && responseText.length > 100);
                    
                    // Handle 409 Conflict or Cloudflare blocks
                    if (response.status === 409 || isCloudflareBlock) {
                        // If it's a Cloudflare block (HTML response), show a helpful message
                        if (isCloudflareBlock) {
                            showContactMessage(
                                'The contact form is temporarily unavailable due to security filtering. Please contact me directly at <a href="mailto:joshua@skyenet.live" style="color: var(--cyan); text-decoration: underline;">joshua@skyenet.live</a> or try again in a few moments.',
                                'error'
                            );
                        } else {
                            // Try to parse as JSON for actual rate limiting from our server
                            try {
                                const data = JSON.parse(responseText);
                                showContactMessage(
                                    data.message || 'Unable to send through the form at this time. Please try again in a moment, or contact joshua@skyenet.live directly.',
                                    'error'
                                );
                            } catch (e) {
                                // Unknown 409 error
                                showContactMessage(
                                    'The form submission was blocked. Please contact me directly at <a href="mailto:joshua@skyenet.live" style="color: var(--cyan); text-decoration: underline;">joshua@skyenet.live</a> or try again later.',
                                    'error'
                                );
                            }
                        }
                        return;
                    }

                    // Parse JSON response for other status codes
                    let data;
                    try {
                        if (!responseText.trim()) {
                            throw new Error('Empty response');
                        }
                        data = JSON.parse(responseText);
                    } catch (parseError) {
                        // If response is HTML (likely Cloudflare), show helpful message
                        if (responseText.includes('<!DOCTYPE') || responseText.includes('<html') || responseText.includes('cloudflare')) {
                            showContactMessage(
                                'The contact form is temporarily unavailable. Please contact me directly at <a href="mailto:joshua@skyenet.live" style="color: var(--cyan); text-decoration: underline;">joshua@skyenet.live</a> or try again later.',
                                'error'
                            );
                        } else {
                            showContactMessage('Server error. Please try again later or contact joshua@skyenet.live directly.', 'error');
                        }
                        return;
                    }

                    if (response.ok && data.success) {
                        showContactMessage('Message sent successfully! I\'ll get back to you soon.', 'success');
                        contactForm.reset();
                        setTimeout(() => {
                            closeContactModalFunc();
                        }, 2000);
                    } else {
                        if (response.status === 429) {
                            showContactMessage(data.message || 'Too many requests. Please wait before submitting again.', 'error');
                        } else {
                            showContactMessage(data.message || 'Failed to send message. Please try again.', 'error');
                        }
                    }
                } catch (error) {
                    console.error('Network error:', error);
                    showContactMessage('Network error. Please check your connection and try again, or contact joshua@skyenet.live directly.', 'error');
                } finally {
                    setTimeout(() => {
                        isSubmitting = false;
                        contactSubmitBtn.disabled = false;
                        contactSubmitBtn.innerHTML = '<i class="fas fa-paper-plane"></i> Send Message';
                        contactForm.style.pointerEvents = 'auto';
                    }, 1000);
                }
            });
        }

        // Initialize
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize dynamic background
            const bgContainer = document.getElementById('dynamicBackground');
            new SynthwaveBackground(bgContainer);

            // Initialize scroll progress
            window.addEventListener('scroll', updateScrollProgress);
            updateScrollProgress();
        });
    </script>
</body>
</html>
