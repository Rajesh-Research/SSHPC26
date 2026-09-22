import type { Metadata } from "next";
import "./globals.css";

export const metadata: Metadata = {
  title: "International Sports Science & Human Performance Conclave 2026 | Woxsen University",
  description: "Join the International Sports Science & Human Performance Conclave 2026 on 25–26 November at Woxsen University, Hyderabad, exploring sports nutrition, clean sport, anti-doping awareness, EMG, sports technology and research.",
  keywords: "Sports Science Conference India, Human Performance Conference, Sports Nutrition Workshop, Anti-Doping Workshop India, EMG Workshop India, Sports Analytics Conference, Sports Research Poster Competition, Woxsen University Sports Science, Clean Sport India, Sports Innovation India",
  other: {
    "codex-preview": "development",
  },
  icons: {
    icon: "/favicon.svg",
    shortcut: "/favicon.svg",
  },
};

export default function RootLayout({
  children,
}: Readonly<{
  children: React.ReactNode;
}>) {
  return (
    <html lang="en">
      <body className="antialiased">{children}</body>
    </html>
  );
}
