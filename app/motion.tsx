"use client";
import {useEffect} from 'react';
import {animate} from 'framer-motion';
export default function MotionEnhancements(){useEffect(()=>{if(window.matchMedia('(prefers-reduced-motion: reduce)').matches)return;const hero=document.querySelector('.hero-inner');if(hero)animate(hero,{opacity:[0,1],y:[14,0]},{duration:.7,ease:'easeOut'});const observer=new IntersectionObserver(entries=>{entries.forEach(entry=>{if(entry.isIntersecting){animate(entry.target,{opacity:[.7,1],y:[12,0]},{duration:.5,ease:'easeOut'});observer.unobserve(entry.target)}})},{threshold:.15});document.querySelectorAll('.track-card,.speaker-placeholder,.stats>div,.registration-grid article').forEach(el=>observer.observe(el));return()=>observer.disconnect()},[]);return null}
