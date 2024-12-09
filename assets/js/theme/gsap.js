
jQuery(document).ready(function ($) {
    const panels = gsap.utils.toArray(".project_manager_box");
    panels.forEach((panel, i) => {
        ScrollTrigger.create({
            trigger: panel,
            start: "top top",
            pin: i < panels.length - 1, // Pin only if it's not the last panel
            pinSpacing: false,
			onUpdate: (self) => {
				const progress = self.progress; // Progress between 0 and 1
				gsap.to(panel, {
				  scale: 1 - 0.15 * progress, // Shrinks to 50% at full progress
				 opacity: 1 - progress, // Fades to 0 at full progress
				  overwrite: "auto", // Avoid conflicts
				  duration: 0, // Instant adjustments
				});
			  },
        });
    });
});
