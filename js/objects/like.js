class Like {
    constructor(targetLikeElt, triggerLikeElt, targetDislikeElt, triggerDislikeElt){
        this.targetLikeElt = document.getElementById(targetLikeElt);
        this.triggerLikeElt = document.getElementById(triggerLikeElt);
        this.targetDislikeElt = document.getElementById(targetDislikeElt);
        this.triggerDislikeElt = document.getElementById(triggerDislikeElt);
        this.likeNumber = 0;
        this.dislikeNumber = 0;
    }

    like(){
      this.triggerLikeElt.addEventListener("click", () => {
          event.preventDefault();
          let totalLikes = this.likeNumber += 1;
          this.targetLikeElt.textContent = totalLikes + ` j'aime`;
          localStorage.setItem('likesNumber', this.targetLikeElt.textContent);
      });
    }

    dislike(){
      this.triggerDislikeElt.addEventListener("click", () => {
          event.preventDefault();
          let totalDislikes = this.dislikeNumber += 1;
          this.targetDislikeElt.textContent = totalDislikes + ` je n'aime pas`;
          localStorage.setItem('dislikesNumber', this.targetDislikeElt.textContent);
      });
    }

}