import axios from 'axios'

const StarBook = (props) => {
    let starred = false
    const userId = props.userId
    const bookId = props.bookId
    let success;

    const getStarData= ()=>{
      try {
        starred=axios.get('/book/star',{userId:userId,bookId:bookId})
      } catch (error) {
        console.log('error in fetching star data')
      }  
    }
    const star=()=>{
      try {
        starred=axios.post('/book/star',{userId:userId,bookId:bookId})
      } catch (error) {
        console.log('error in posting star data')
      }  
    }
    useEffect(()=>{
        getStarData()
    },[])

    return ( 
        <div>
          {starred && <button onClick={star} className="bg-primary text-white">starred</button>}
          {!starred && <button onClick={star} className="">star</button>}
        </div>
     );
}

export default StarBook;