const username = document.getElementById('username').value;
const saveScoreBtn = document.querySelector('#saveScoreBtn');
const finalScore = document.getElementById('#finalScore');
const mostRecentScore = document.querySelector('#mostRecentScore');


const highScores = JSON.parse(localStorage.getItem('highScores')) || []

const MAX_HIGH_SCORES = 5;

finalScore.innerText = document.getElementById('score').value;



saveHighScore = e => {
    e.preventDefault()

    const score = {
        score: mostRecentScore,
        name: username.value
    }

    highScores.push(score)

    highScores.sort((a, b) => {
        return b.score - a.score
    })

    highScores.splice(10)

    localStorage.setItem('highScores', JSON.stringify(highScores))
    window.location.assign('/')

}
