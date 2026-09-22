# International Sports Science & Human Performance Conclave 2026

Production website for the International Sports Science & Human Performance Conclave 2026 at Woxsen University, Hyderabad, on 25-26 November 2026.

## Local development

Requirements: Node.js 22.13 or newer.

```bash
npm ci
npm run dev
```

Production verification:

```bash
npm audit --omit=dev
npm run build
```

## Content configuration

Editable event content is stored under `app/data/`:

- `event.ts` - event identity, dates, venue and map
- `tracks.ts` - five programme pillars
- `schedule.ts` - two-day programme
- `registration.ts` - fees and registration link
- `speakers.ts` - confirmed speakers
- `partners.ts` - organiser and collaborators
- `posterCategories.ts` - research categories
- `faq.ts` - participant questions
- `contact.ts` - organising-team details

Registration is handled by the configured Google Form. The website does not collect or store registration, contact, payment or authentication data.

## Deployment

The production application uses Vinext on the Sites/Cloudflare runtime. Build output and local runtime state are excluded from source control.

See [SECURITY.md](SECURITY.md) for the public security model and reporting guidance.