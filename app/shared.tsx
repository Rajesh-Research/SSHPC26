"use client";
import {ReactNode} from 'react';
import {ArrowUpRight} from 'lucide-react';
export function Wave({className=''}:{className?:string}){return <svg className={`wave ${className}`} viewBox="0 0 900 150" fill="none" aria-hidden="true"><path className="wave-grid" d="M0 37H900M0 75H900M0 112H900M100 0V150M200 0V150M300 0V150M400 0V150M500 0V150M600 0V150M700 0V150M800 0V150"/><path className="wave-line" d="M0 76L70 76 78 69 85 81 93 73 115 77 130 74 140 89 149 54 157 102 164 32 173 126 181 17 190 133 201 43 211 92 225 65 237 80 260 76 315 76 327 61 337 88 348 44 358 116 368 19 380 140 392 5 406 128 418 36 432 99 444 60 458 82 475 76 542 76 552 67 563 86 574 58 585 105 597 26 610 125 623 14 638 136 651 36 665 98 680 61 695 81 710 76 765 76 777 66 791 89 805 55 817 101 829 41 841 98 854 68 868 78 900 76"/></svg>}
export function Label({children}:{children:ReactNode}){return <p className="eyebrow"><span/>{children}</p>}
export function LinkButton({children,href,secondary=false}:{children:ReactNode;href:string;secondary?:boolean}){return <a className={`button ${secondary?'secondary':''}`} href={href}>{children}<ArrowUpRight size={17}/></a>}

