# Woxsen Conclave 2026

React / TypeScript event site with the Next.js-compatible Vinext runtime, Tailwind CSS, Lucide and Framer Motion. Use Node 22.13 or newer. Run `npm run install:ci`, `npm run dev`, and `npm run build`.

## Event configuration

Edit the labelled modules in `app/data/` to update event details, links, category fees, coordinator details, map link, FAQs, programme, partners and confirmed speakers. Empty URLs intentionally show coming-soon notices. No fees or deadlines have been invented. PEFI and NADA remain explicitly proposed collaborators.

The contact and industry forms validate input. Their endpoint defaults to empty, so they do not send or store personal data. `app/api/enquiry/route.ts` is an explicit 503 integration placeholder, never a fake successful backend. Before opening enquiries, connect an approved delivery service with server-side validation, spam protection, rate limiting and a published privacy policy, then set `enquiryEndpoint` to `/api/enquiry`. A successful HTTP response must mean the delivery service accepted the enquiry.

No social links are displayed because none were supplied. Replace the labelled campus placeholder with an authorised campus photograph when available. The generated athlete artwork is illustrative, not a depiction of an event participant.

## Graphics

Built-in ImageGen created `public/athlete-hero.webp` from this prompt: Premium sports science conference hero, photorealistic adult male sprinter in black technical sportswear moving right, deep midnight background, cyan rim lighting, subtle biomechanical motion-capture nodes and EMG trails, empty dark left third, no text or logos. Original retained in the Codex generated-images folder. SVG waveform and track graphics are reusable code in the site.

All schedules are tentative. Speaker identities, fees, deadlines, awards and contacts have not been fabricated. Certification is qualified as applicable. Waveform graphics are educational illustrations, not clinical measurements.
